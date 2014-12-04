package com.android.database;

import java.util.ArrayList;

import com.example.model.Task;
import com.example.model.User;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;
import android.util.Log;

public class DBHelper extends SQLiteOpenHelper {
	// The database name and version
	private static final String DB_NAME = "ToDo";
	
	private static String TABLE_TASKS = "tasks";
	private static String TABLE_USER = "user";
	private static String TABLE_LOGGED_IN = "loggedIn";

	private static final int DB_VERSION = 4;
	// The database user table
	private static final String DB_TABLE = "CREATE TABLE user (id integer primary key autoincrement, " 
											+ "username text not null, password text not null);";
	
	//the database task table
	private String createDBSQL = 
	"create table tasks(" +
			"task_id INTEGER PRIMARY KEY AUTOINCREMENT, " +
			"description varchar(400), " +
			"title varchar(100) not null," +
			"status int not null," +
			"date_created date not null, " +
			"date_due date" +
			"username text references user(username)"   +
			")";
	/**
	 * Database Helper constructor. 
	 * @param context
	 */
	public DBHelper(Context context) {
		super(context, DB_NAME, null, DB_VERSION);
	}
	/**
	 * Creates the database tables.
	 */
	@Override
	public void onCreate(SQLiteDatabase database) {
		database.execSQL(DB_TABLE);
		database.execSQL(createDBSQL);
		database.execSQL("create table loggedIn(username text references user(username))");

	}
	/**
	 * Handles the table version and the drop of a table.   
	 */			
	@Override
	public void onUpgrade(SQLiteDatabase database, int oldVersion, int newVersion) {
		Log.w(DBHelper.class.getName(),
				"Upgrading databse from version" + oldVersion + "to " 
				+ newVersion + ", which will destroy all old data");
		database.execSQL("DROP TABLE IF EXISTS " + TABLE_TASKS);
		database.execSQL("DROP TABLE IF EXISTS " + TABLE_USER);
		database.execSQL("DROP TABLE IF EXISTS " + TABLE_LOGGED_IN);

		
		this.onCreate(database);

	}
	
	
	public void insertTask(Task t){
		SQLiteDatabase db = getWritableDatabase();
		
		ContentValues cv = new ContentValues();
		cv.put(Task.TITLE, t.getTitle());
		cv.put(Task.DESCRIPTION, t.getDescription());
		cv.put(Task.DATE_CREATED, t.getDateCreated());
		cv.put(Task.DATE_DUE, t.getDateDue());
		cv.put(Task.STATUS, t.getStatus());
		
		db.insert(TABLE_TASKS, null, cv);
	}
	
	public int countTasks(int status){
		SQLiteDatabase db = getReadableDatabase();
		
		Cursor c = db.query(
				TABLE_TASKS, 
				null, 
				Task.STATUS + "=?", 
				new String[] {String.valueOf(status)}, 
				null, 
				null, 
				null);
		
		return c.getCount();
	}


	public ArrayList<Task> getTasks(int status) {
		SQLiteDatabase db = getReadableDatabase();

		ArrayList<Task> output = new ArrayList<Task>();
		
		Cursor c = db.query(
				TABLE_TASKS, 
				new String[] {"task_id", "title"}, 
				Task.STATUS + "=?", 
				new String[] {String.valueOf(status)}, 
				null, 
				null, 
				"date_due");
		
		c.moveToFirst();
		
		for (int i=0; i<c.getCount(); i++){
			Task t = new Task();
			
			// putting only the data that we'll need
			
			Log.d("Dbhellper", c.toString());
			
			t.setId(c.getInt(c.getColumnIndex("task_id")));
			t.setTitle(c.getString(c.getColumnIndex("title")));
			
			output.add(t);
			c.moveToNext();
		}
		return output;
	}


	public Task getTask(long id) {
		Task t = new Task();
		
		SQLiteDatabase db = getReadableDatabase();
		
		Cursor c = db.query(
				TABLE_TASKS, 
				null, 
				"task_id=?", 
				new String[]{String.valueOf(id)},
				null,
				null,
				null);
		
		if (c.getCount() >= 1){
			c.moveToFirst();
			
			t.setId(c.getInt(c.getColumnIndex("task_id")));
			t.setTitle(c.getString(c.getColumnIndex("title")));
			t.setDescription(c.getString(c.getColumnIndex("description")));
			t.setDateDue(c.getString(c.getColumnIndex("date_due")));
			
		}
		
		return t;
	}
	
	
	public User isLoggedIn() {
		User u = null;
		SQLiteDatabase db = this.getReadableDatabase();

		Cursor c = db
				.query(TABLE_LOGGED_IN, null, null, null, null, null, null);

		boolean hasUserLoggedIn = false;
		if (c != null && c.getCount() == 1) {
			hasUserLoggedIn = c.moveToFirst();
		}

		if (hasUserLoggedIn) {
			u = getUser(c.getString(0));
		}

		return u;
	}
	
	private User getUser(String uname) {
		User u = null;

		SQLiteDatabase db = getReadableDatabase();
		Cursor c = db.query(TABLE_USER, new String[] { "username", "password" },
				"username = ?", new String[] { uname }, null, null, null);

		if (c != null && c.getCount() == 1) {
			c.moveToFirst();
			u = new User(c.getString(0), c.getString(1));
		}

		return u;
	}
}
