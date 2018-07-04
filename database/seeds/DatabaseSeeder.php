<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventsTableSeeder::class);
        $this->command->info('Таблица events заполнена данными');

        $this->call(BidsTableSeeder::class);
        $this->command->info('Таблица bids заполнена данными');

        $this->call(TasksTableSeeder::class);
        $this->command->info('Таблица tasks заполнена данными');
    }
}

class EventsTableSeeder extends Seeder {

    public function run() {
        DB::table('events')->insert([
            ['caption' => 'Atlas Weekend 2017'],
            ['caption' => 'Грин Грей (Green Grey)'] 
        ]);
    }
}

class BidsTableSeeder extends Seeder {

    public function run() {
        DB::table('bids')->insert([
            ['id_event' => 1, 'name' => 'Василий', 'email' => 'vas@gmail.com', 'price' => 100],
            ['id_event' => 1, 'name' => 'Николай', 'email' => 'nk@gmail.com', 'price' => 150],
            ['id_event' => 1, 'name' => 'Игорь', 'email' => 'ig@gmail.com', 'price' => 200],
            ['id_event' => 1, 'name' => 'Влад', 'email' => 'vlad@gmail.com', 'price' => 200]
        ]);
    }
}

class TasksTableSeeder extends Seeder {

    public function run() {
        DB::table('tasks')->insert([
            ['task' => '1) Написать алгоритм решения задачи:  В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе  занимаются спортом и сколько всего учеников в классе?', 'code_example' => 'function countOfSportsmen(numOfStudents) {    console.log("В классе "+ numOfStudents + " учеников\ " +                Math.ceil(numOfStudents * 0.75) + " из низ занимаються спортом");  }  countOfSportsmen(28);', 'result' => 'В классе 28 учеников  21 из низ занимаються спортом'],
            ['task' => '2) Реализовать алгоритм извлечения числовых значений со строки: This server has 386 GB RAM and 5000 GB storage', 'code_example' => 'на js:  function getNumFromString(str){    var numsArr = str.match(/\\d+/g);    console.log(numsArr);  }  getNumFromString("This server has 386 GB RAM and 5000 GB storage");    на PHP:  function getNumFromString($str) {        \tpreg_match_all(\'\'!\\d+!\'\',  $str, $nums);        \tprint_r($nums);    }  getNumFromString("This server has 386 GB RAM and 5000 GB storage");', 'result' => '["386", "5000"]'],
            ['task' => '3) ​Как получить первый элемент массива ​[2,3,56,65,56,44,34,45,3,5,35,345,3,5]​ ​?', 'code_example' => 'Просто взять нулевой элемент по типу: arr[0]  var arr = [2,3,56,65,56,44,34,45,3,5,35,345,3,5];  console.log(arr[0]);', 'result' =>  '2'],
            ['task' => '4) Как вычислить остаток от деления 10/3', 'code_example' => 'использовать оператор взятия остатка - %  console.log(10%3);', 'result' => '1'],
            ['task' => '5) Нужно поменять 2 переменные местами без использования третьей: $а = [1,2,3,4,5]; $b = ‘Hello world’;', 'code_example' => 'на javascript:  var a = [1,2,3,4,5],      b = "Hello world";  [a,b] = [b,a]  console.log(a, b);    на php:  $a = [1, 2, 3, 4, 5];  $b = "Hello world";   list($a,$b) = array($b,$a);   echo $a."\ ";   print_r($b);', 'result' =>  '"a = Hello world"  "b = 1,2,3,4,5"'],
            ['task' => '6) Чем отличается оператор == от === ?', 'code_example' => '=== - строгое сравнение(учитывает тип переменной), == - не строгое сравнение(сравнивает после преобразования типов). Например: 5 == "5" = true, 5 === "5" = false.', 'result' => ' 5 == "5" = true, 5 === "5" = false'],
            ['task' => '7) Чем отличается require от include ?', 'code_example' => 'при невозможности получить файл, require вертнет fatal error и остановит выполнение скрипта, include - вернет warning.', 'result' => ''],
            ['task' => '8) Какие данные пользователя сайта из перечисленных можно считать на 100% достоверными: cookie, данные сессии, IP-адрес пользователя , User-Agent? Почему?', 'code_example' => 'Я думаю данные сессии можно считать достоверными, потому что они храняться на сервере и юзер не может на них повлиять.', 'result' =>  ''],
            ['task' => '9) Что выведет следующий код на JavaScript и почему: for( var i =0; i < 10; i++){  setTimeout(function () {  console.log(i); }, 100); }  ', 'code_example' => 'Данный код выведет десять десяток, потому что до выполнения console.log будет накладываться выполнение цикла. решается   та проблема помешением сетТаймаута в функцию и вызов этой функции в цикле:    for( var i =0; i < 10; i++){    timeout(i);  }    function timeout(i) {    setTimeout(function () {      console.log(i);    }, 1000);  }', 'result' =>  '0  1  2  3  4  5  6  7  8  9'],
            ['task' => '10) В базе данных хранится список мероприятий (таблица events) и список заявок на покупку билетов на указанные мероприятия (таблица bids).  1. Сделать миграцию для выше указанной схемы и залить в базу тестовые данные  2. Напишите запрос, который выберет имя пользователя (bids.name) с самой  высокой ценой заявки (bids.price)  3. Напишите запрос, который выберет название мероприятия (events.caption), по  которому нет заявок  4. Напишите запрос, который выберет название мероприятия (events.caption), по  которому больше трех заявок  5. Напишите запрос, который выберет название мероприятия (events.caption), по  которому больше всего заявок', 'code_example' => 'В файле TasksController.php', 'result' =>  '']
        ]);
    }
}

