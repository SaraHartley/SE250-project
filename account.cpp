//Krithik Raja
//se250 - project - account class
#include <iostream>
#include <string>
#include <fstream>
#include <cstring>
using namespace std;

bool isLoggedIn(){ //boolean values for this and signUp()
	
	string username, password, un, pw;
	
	cout << "Enter username: ";
	cin >> username;
	
	cout << "Enter password: ";
	cin >> password;
	
	ifstream read(username + ".txt");
	getline(read, un);
	getline(read, pw);
	
	if((un == username) && (pw == password)){
		return true;
	}
	else{
		return false; 
	}
}
	
int main(){
	
	int choice; //will have to chage this to a string
	
	cout << "1: Register\n2 : Login\nYour Choice: ";
	cin >> choice;
	if(choice == 1){
		string username,password;
		cout << "select a username: ";
		cin >> username;
		cout << "select a password: ";
		cin >> password;
		
		ofstream file(username + ".txt");;
		file << username << endl << password << endl;
		file.close();
		
		main();
	}
	else if(choice == 2){
		bool status = isLoggedIn();
		
		if(!status){
			cout << "False login" << endl;
			system("PAUSE");
			return 0;
		}
		else{
			cout << "Success" << endl;
			system("PAUSE");
			return 0;
		}
	}
}
