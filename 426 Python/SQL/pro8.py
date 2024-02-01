import mysql.connector
from MySQLdb._mysql import connection
try:
    connection = mysql.connector.connect(host="localhost", user="root", passwd="",
    database="pydb")

    myCursor = connection.cursor()
    query = "insert into students (fname, lname, city, email, phone, gender) values (" \
            "%s, %s, %s, %s, %s, %s)"
    data = [
        ("Priya", "Rathod", "Rajkot", "Priya@atmiyauni.edu", "9988998899", "Female"),
        ("Ashita", "Gohel", "Rajkot", "aashita@atmiyauni.edu", "9988998899", "Female"),
        ("Naisargi", "Sondagar", "Rajkot", "Naisargi@atmiyauni.edu", "9988998899", "Female"),
        ("Ganga", "Khatri", "Rajkot", "Ganga@atmiyauni.edu", "9988998899", "Female"),
        ("Jigar", "Vaghela", "Rajkot", "Jigar@atmiyauni.edu", "9988998899", "male"),
        ("Sunny", "Sata", "Rajkot", "sunny@atmiyauni.edu", "9988998899", "male"),
        ("Kalpesh", "Kisla", "Rajkot", "kalpesh@atmiyauni.edu", "9988998899", "male"),
        ("Nikhil", "DObariya", "Rajkot", "nikhil@atmiyauni.edu", "9988998899", "male"),
        ("Harshil", "Khakhi", "Rajkot", "harshil@atmiyauni.edu", "9988998899", "male"),
        ("Kairavi", "Parsana", "Rajkot", "kairavi@atmiyauni.edu", "9988998899", "Female"),
        ("Hemang", "Baldha", "Rajkot", "hemang@atmiyauni.edu", "9988998899", "male")
    ]
    myCursor.executemany(query, data)
    print("New Record Created")
    connection.commit()
    connection.close()
except Exception as err:
    connection.rollback()
    print("Error is ",err)