# authorization
## Задание
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP
### Система должна обладать следующим функционалом:

•	Функциональность входа и выхода

•	Пароли должны хранится в хешированном виде

•	Форма регистрации 

•	Возможность смены пароля 

•	Возможность восстановления пароля 

•	Ограничение времени сессии на стороне сервера 

•	Ограничение срока действия пароля на стороне сервера 

•	Хранение хеша пароля с солью.

## Ход работы
- Разработаем пользовательский интерфейс и опишем пользовательские сценарии работы

![Рис. 1 - Интерфейс](https://github.com/Ponixs/authorization/blob/main/0.png)

Первоначально пользователь попадает на форму входа (sign_in). Затем, если у него есть аккаунт, то он вводит логин и пароль и входит в свой аккаунт, нажав кнопку “sing in”. В случае корректного ввода пользователь перенаправляется на главную страницу (index). Если же он ввел что-то неправильно, то возвращается на эту же страницу, но снизу будет написано сообщение о его ошибке.

Если же изначально пользователь не имеет аккаунта, то он может перейти по ссылке “sign up” и зарегистрироваться. В данном случае пользователь перенаправляется на страницу регистрации (sign_up), где ему необходимо ввести имя, почту, логин и пароль два раза и нажать на кнопку “sign up”. В случае корректного ввода он перенаправляется на главную страницу (index). Если же пользователь ввел что-то неправильно, то возвращается на эту же страницу, но вверху будет написано сообщение о его ошибке. Если пользователь случайно перешел по ссылке регистрации, то он может нажать на ссылку “Have an account? Sign In!”, которая вернет его обратно на форму входа.

Если же пользователь забыл пароль от уже существующего аккаунта и не может войти, находясь на форме входа, то он может перейти по ссылке “Forgot your password?” и изменить пароль. В данном случае пользователь перенаправляется на страницу изменения пароля (forgot_pass_form), где ему необходимо ввести имя, логин и пароль два раза и нажать на кнопку “change pass”. В случае корректного ввода пользователь перенаправляется на главную страницу (sign_in). Если же он ввел что-то неправильно, то возвращается на эту же страницу, но снизу будет написано сообщение о его ошибке.

Когда пользователь попадает на главную страницу, то у него есть две ссылки: “exit” и “change pass”. Первая ссылка перенаправляет пользователя на форму входа, при этом он выходит из аккаунта. Вторая ссылка перенаправляет на страницу смены пароля (change_pass_form). На этой странице ему нужно ввести старый пароль и новый два раза и нажать на кнопку “change pass”. В случае корректного ввода пользователь перенаправляется на главную страницу (index.php) и на ней снизу отображается сообщение об успешной смене пароля. Если же он ввел что-то неправильно, то возвращается на эту же страницу, но снизу будет написано сообщение о его ошибке.


- Опишем хореографию

![Рис. 2 - Хореография](https://github.com/Ponixs/authorization/blob/main/1.png)
- Опишем структуру базы данных

![Рис. 3 - База данных](https://github.com/Ponixs/authorization/blob/main/base.png)

- Опишем общий алгоритм
 
 ![](https://github.com/Ponixs/authorization/blob/main/2.png)


## Вывод
Спроектировали и разработали систему авторизации пользователей на протоколе HTTP
