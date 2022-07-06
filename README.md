### PREREQUISITE
- XAMPP version 8.1.6
  https://www.apachefriends.org/blog/new_xampp_20220516.html
- Composer
  https://getcomposer.org/
- Git
  https://git-scm.com/downloads

### Installation
- Clone the Repository from GitHub to your local machine. Open Git Bash
```
    cd C:/xampp/htdocs/
    git clone https://github.com/jimspags/https://github.com/jimspags/laravel-diary.git
    cd laravel-todo-list
    git pull
    composer install
```

- Create Database using XAMPP. Open XAMPP control panel
```
    Start Apache and Mysql
    Click Admin of Apache
    Navigate to PhpMyAdmin
    Click new and type any database name and create
```

- Configure database information. Open project folder using your any code editor
```
    Open .env file
    Set value DB_DATABASE = <database_name> and save
    Set username DB_USERNAME = root //for default
    Set password DB_PASSwORD = //Leave it blank for default
```

- Run the project. Open terminal inside the project folder and run this commands
```
    php artisan serve
    php artisan migrate
```

- Open project on web browser. Enter this laravel development server on the url tab
```
  http://127.0.0.1:8000
```


## Diary

Built using Laravel 9, Ajax, JQuery, Bootstrap 5

- Login and Register Account with upload photo
- Add, edit, delete and display diary

### Homepage
<img width="500" alt="HomepagePNG" src="https://user-images.githubusercontent.com/73511781/177454115-b1259737-eba1-43c4-88cb-4ad928d7228b.PNG">

### Login
<img width="500" alt="Login" src="https://user-images.githubusercontent.com/73511781/177454209-f0cb512f-4e88-4366-848a-17fcc99c3397.PNG">

### Register
<img width="500" alt="Register" src="https://user-images.githubusercontent.com/73511781/177454241-d1cf5e4c-4adc-4612-8a20-d41140fce953.PNG">

### Interface
<img width="500" alt="Interface" src="https://user-images.githubusercontent.com/73511781/177454275-428ec523-bdb6-48d6-808a-85fee42f78f6.PNG">

### Edit and Delete Action
<img width="500" alt="Add and Update" src="https://user-images.githubusercontent.com/73511781/177454346-ac966702-43e3-447c-a02c-3310fa7e4e42.PNG">

### Update
<img width="500" alt="Update Modal" src="https://user-images.githubusercontent.com/73511781/177454381-bca57abb-c23d-44c0-b139-2035c1d5de9d.PNG">

### Logout
<img width="319" alt="Logout" src="https://user-images.githubusercontent.com/73511781/177454410-b06d86f8-6001-4c60-8531-c9bad7547110.PNG">



