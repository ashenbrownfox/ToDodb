package com.android.loginapp;

import java.util.ArrayList;

import com.android.database.DBHelper;
import com.example.model.Task;

import android.app.Activity;
import android.app.AlertDialog;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnLongClickListener;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.AdapterView.OnItemLongClickListener;
import android.widget.ArrayAdapter;
import android.widget.ListAdapter;
import android.widget.ListView;

public class TaskListActivity extends Activity {
	
	
	protected static final String TITLE = "title";
	protected static final String TODO = "To do";
	protected static final String DOING = "Doing";
	protected static final String DONE = "Done";

	private ArrayList<Task> tasks = new ArrayList<Task>();
	private DBHelper dbh;
	
	private ListView taskList;
	
	
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.task_list);
		
		dbh = new DBHelper(getBaseContext());
		String title = getIntent().getExtras().getString(TITLE);
		setTitle(title);
		
		if (title.equals(TODO)){
			tasks = dbh.getTasks(Task.STATUS_TODO);
		} else if (title.equals(DOING)){
			tasks = dbh.getTasks(Task.STATUS_DOING);
		} else if (title.equals(DONE)){
			tasks = dbh.getTasks(Task.STATUS_DONE);
		}
		
		taskList = (ListView) findViewById(R.id.taskListView);
		
		ListAdapter adapter = new ArrayAdapter<Task>(
				getBaseContext(), 
				android.R.layout.simple_list_item_1, 
				tasks);
		
		taskList.setAdapter(adapter);
		
		taskList.setLongClickable(true);
		taskList.setOnItemLongClickListener(taskListLongClickListener);
		taskList.setOnItemClickListener(taskListClickListener);
	}
	
	private OnItemLongClickListener taskListLongClickListener = new AdapterView.OnItemLongClickListener() {

		@Override
		public boolean onItemLongClick(AdapterView<?> parent, View view,
				int position, long id) {
			// TODO handle long click
			
			return false;
		}
	};
	
	private OnItemClickListener taskListClickListener = new AdapterView.OnItemClickListener() {

		@Override
		public void onItemClick(AdapterView<?> parent, View view, int position,
				long id) {
			
			AlertDialog.Builder builder = new AlertDialog.Builder(TaskListActivity.this);
			Task t = dbh.getTask(tasks.get(position).getId());
			if (t != null ){
				builder.setTitle(t.getTitle());
				String desc = t.getDescription() == null ? "":t.getDescription();
				String dueDate = t.getDateDue() == null ?  "": "Due: " + t.getDateDue();
				builder.setMessage(desc + " " +  dueDate);
				builder.show();
			}
		}
	};

}
