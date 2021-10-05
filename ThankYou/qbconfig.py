import mysql.connector as db
from mysql.connector import Error

try:
    connection =db.connect(host='localhost',database='birthday',user='root',password='')
    if connection.is_connected():
        cursor = connection.cursor()
        cursor.execute("select * from users")
        users = cursor.fetchall()  #get all wishers
        cursor.execute("select wishes.title from wishes")
        titles = cursor.fetchall()

except Error as e:
    print("Error while connecting to MySQL", e)
finally:
    if connection.is_connected():
        cursor.close()
        connection.close()


for user in users:
    print(user)
for title in titles:
    print(title)