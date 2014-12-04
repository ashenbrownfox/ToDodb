package com.android.loginapp;

import java.util.Calendar;

import com.android.database.DBHelper;
import com.example.model.Task;

import android.app.Activity;
import android.app.DatePickerDialog;
import android.app.DatePickerDialog.OnDateSetListener;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

public class AddTaskActivity extends Activity {
	
	
	protected static final int DATE_DIALOG = 999;

	private Button addTaskBtn, dueDateBtn;
	
	private EditText title, description;
	
	private TextView addTaskDueDate;
	
	private int year, month, day;
	
	private Spinner status;

	
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		
		
		super.onCreate(savedInstanceState);
		setContentView(R.layout.add_task);
		
		addTaskDueDate = (TextView) findViewById(R.id.addTask_dueDate);
		
		status = (Spinner) findViewById(R.id.addTask_status);
		
		dueDateBtn = (Button) findViewById(R.id.addTask_changeDueDate);
		dueDateBtn.setOnClickListener(dueDateListener);
		
		title = (EditText) findViewById(R.id.addTask_title);
		description = (EditText) findViewById(R.id.addTask_description);
		
		
		
		addTaskBtn = (Button) findViewById(R.id.addTask_addTaskBtn);
		
		addTaskBtn.setOnClickListener(addTaskBtnListener);
		
		Calendar c = Calendar.getInstance();
		
		year = c.get(Calendar.YEAR);
		month = c.get(Calendar.MONTH);
		day = c.get(Calendar.DAY_OF_MONTH);
		
	}
	
	private OnClickListener addTaskBtnListener = new View.OnClickListener() {
		@Override
		public void onClick(View v) {
			
			if (title.getText().length() > 0){
				
				
				Task t = new Task();
			   
				isLoggedIn(t);
		        t.setTitle(title.getText().toString());
				t.setDescription(description.getText().toString());
				setStatus(t);
				setDueDate(t);
				
				DBHelper dbh = new DBHelper(getBaseContext());
				
				dbh.insertTask(t);
				Toast.makeText(getBaseContext(), "Adding Task", Toast.LENGTH_SHORT).show();
				finish();
				
			} else {
				Toast.makeText(getBaseContext(), "You have to put a title",
						Toast.LENGTH_SHORT).show();
			}
			
		}
	};
	
	private OnClickListener dueDateListener = new View.OnClickListener() {
		@Override
		public void onClick(View v) {
			showDialog(DATE_DIALOG);
		}
	};

	private OnDateSetListener datePickerListener = new DatePickerDialog.OnDateSetListener() {
		
		@Override
		public void onDateSet(DatePicker view, int year, int monthOfYear,
				int dayOfMonth) {
			addTaskDueDate.setText(year  + "-" + monthOfYear+ "-" + dayOfMonth);
			
		}
	};
	
	
	
	
	@Override
	protected android.app.Dialog onCreateDialog(int id) {
		switch (id){
		case DATE_DIALOG: 
			return new DatePickerDialog(this, datePickerListener, year, month, day);
		}
		return null;
	}
	
	private void setDueDate(Task t){
		if (!addTaskDueDate.getText().equals("No due date")){
			t.setDateDue(addTaskDueDate.getText().toString());
		}
	}
	
	private void  isLoggedIn(Task t){
		DBHelper dbh = new DBHelper(getBaseContext());
            dbh.isLoggedIn();
		
	}

	protected void setStatus(Task t) {
		Log.d("addTaskActivity", " " + status.getSelectedItem().equals("To do"));
		if (status.getSelectedItem().equals("To do")){
			t.setStatus(Task.STATUS_TODO);
		} else if (status.getSelectedItem().equals("Doing")){
			t.setStatus(Task.STATUS_DOING);
		} else if (status.getSelectedItem().equals("Done")){
			t.setStatus(Task.STATUS_DONE);
		}
	};
}
