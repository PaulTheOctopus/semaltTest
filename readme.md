<h2>Тестовое задание для компании Semalt</h2>
<p>Для того чтобы запустить данное приложение необходимо:</p>
<ol>
  <li>Скачать или склонировать себе на диск данный репозиторий</li>
  <li>Создать новую базу данных на локальном веб сервере</li>
  <li>В папке проекта, в файле .env значения DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD</li>
  <li>Открыть консоль в папке с проектом и выполнить команду php artisan migrate:install</li>
  <li>Далее php artisan migrate --seed</li>
  <li>Далее php artisab serve</li>
<ol>
После успешного выполнения вышеперечисленных пунктов вы увидите сообщение "Laravel development server started", перейдите на адрес сайта в браузере, по умолчанию <http://127.0.0.1:8000>.
