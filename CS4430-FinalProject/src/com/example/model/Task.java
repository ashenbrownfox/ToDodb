package com.example.model;

import java.util.Date;

public class Task {

	public static final int STATUS_DONE = 0;
	public static final int STATUS_DOING = 1;
	public static final int STATUS_TODO = 2;
	
	public static final String TITLE = "title";
	public static final String DATE_CREATED = "date_created";
	public static final String DESCRIPTION = "description";
	public static final String DATE_DUE = "date_due";
	public static final String STATUS = "status";
	public static final String USERNAME = "username";
	// is initialized with the current time
	private Date dateCreated = new Date();
	private String title, description;
	private long id = -1;
	private int status = STATUS_TODO;
	private String dateDue;
	private String usernameOwner;
	
	
	
	
	public Task(String username, String title, String description, int status, String duedate) {
		this.usernameOwner = username;
		this.title = title;
		this.description = description;
		this.status = status;
		this.dateDue = duedate;
	}

	public Task(){}
	public String getTitle() {
		return title;
	}

	public void setTitle(String title) {
		this.title = title;
	}

	public String getDescription() {
		return description;
	}

	public void setDescription(String description) {
		this.description = description;
	}

	public long getId() {
		return id;
	}

	public void setId(long id) {
		this.id = id;
	}

	public int getStatus() {
		return status;
	}

	public void setStatus(int status) {
		this.status = status;
	}

	public String getDateCreated() {
		return dateCreated.toString();
	}

	public String getDateDue() {
		return (dateDue == null) ? null : dateDue.toString();
	}

	public void setDateDue(String dateDue) {
		this.dateDue = dateDue;
	}
	
	@Override
	public String toString() {
		return getTitle();
//		return String.format(
//				"Id: %d, Title: %s, Description: %s, DateCreated: %s, dateDue: %s, status: %d", 
//				getId(), getTitle(), getDescription(), getDateCreated(), getDateDue(), getStatus());
	}

	
	public String getUsernameOwner() {
		return usernameOwner;
	}
	
	public void setUsernameOwner(String usernameOwner) {
		this.usernameOwner = usernameOwner;
	}

}
