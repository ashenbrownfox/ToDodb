package com.android.loginapp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.TextView;

import com.android.database.DBHelper;
import com.example.model.Task;
import com.android.loginapp.AddTaskActivity;
import com.android.loginapp.TaskListActivity;


public class MainPage extends Activity {
	
	public TextView helloTextView;
	private Button addTaskBtn, todoBtn, doingBtn, doneBtn;
	private DBHelper dbh;
	
	@Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.hello);
        initControls();
        
        dbh = new DBHelper(getBaseContext());

        addTaskBtn = (Button) findViewById(R.id.addTaskBtn);
        
        todoBtn = (Button) findViewById(R.id.todoBtn);
        doingBtn = (Button) findViewById(R.id.doingBtn);
        doneBtn = (Button) findViewById(R.id.doneBtn);
        
        todoBtn.setOnClickListener(todoBtnlickListener);
        doingBtn.setOnClickListener(doingBtnClickListener);
        doneBtn.setOnClickListener(doneBtnClickListener);
        addTaskBtn.setOnClickListener(addTaskClickListener);
        
        
    }
	    
	public void initControls(){
	//	helloTextView = (TextView)findViewById(R.id.myTextView);
	}
	
private OnClickListener todoBtnlickListener = new View.OnClickListener() {
		
		@Override
		public void onClick(View v) {
			openTaskList(TaskListActivity.TODO);
		}
	};

	private OnClickListener doingBtnClickListener = new View.OnClickListener() {
		
		@Override
		public void onClick(View v) {
			openTaskList(TaskListActivity.DOING);
		}
	};
	
	private OnClickListener doneBtnClickListener = new View.OnClickListener() {
		
		@Override
		public void onClick(View v) {
			openTaskList(TaskListActivity.DONE);
		}
	};

    private void fillButtons() {
    	// TODO if you add the user you have to handle it here or get the 
    	// user logged in inside the dbhelper class.
		 todoBtn.setText("To do (" + dbh.countTasks(Task.STATUS_TODO) + ")");
		 doingBtn.setText("Doing (" + dbh.countTasks(Task.STATUS_DOING) + ")");
		 doneBtn.setText("Done (" + dbh.countTasks(Task.STATUS_DONE) + ")");
	}
    
    protected void openTaskList(String title) {
    	Intent i = new Intent(getApplication(), TaskListActivity.class);
		i.putExtra(TaskListActivity.TITLE, title);
		startActivity(i);
	}

	@Override
    protected void onResume() {
    	super.onResume();
    	
    	fillButtons();
    }
    
        
    
    private OnClickListener addTaskClickListener = new View.OnClickListener() {
		
		@Override
		public void onClick(View v) {
			Intent i = new Intent(getApplication(), AddTaskActivity.class);
			startActivity(i);
		}
	};
}

