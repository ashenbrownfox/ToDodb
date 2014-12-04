package com.example.model;

public class User {
	
	public static final String NAME = "username";
	public static final String PASSWORD = "password";
	
	private String name, password;
	private long id;
	
	public User(String name, String password){
		id=-1;
		this.name = name;
		this.password = password;
	}
	
	public String getUsername() {
		return name;
	}
	
	public void setName(String name) {
		this.name = name;
	}
	
	public String getPassword() {
		return password;
	}
	public void setPassword(String password) {
		this.password = password;
	}
	
	public long getId() {
		return id;
	}
	
	public void setId(long id) {
		this.id = id;
	}
	
	@Override
	public String toString() {
		return getUsername();
	}

}
