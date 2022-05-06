<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>...</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_light.css" id="themeLink">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="main">
    <input type="checkbox" id="ham-menu">
    <label for="ham-menu" class="menu" id="button_menu">
        <div class="hide-des">
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
            <span class="menu-line"></span>
        </div>
    </label>

    <div id="overlay_menu"></div>
    <div class="ham-menu" id="menu">
        <ul class="centre-text bold-text">
            <li>
                <input type="radio" name="left_submenu" id="time_table_01"/>
                <label for="time_table_01" class="time">
                    Расписание
                    <svg class="click" width="28" height="17" viewBox="0 0 28 17" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <line y1="-2" x2="19.3367" y2="-2"
                              transform="matrix(0.706464 -0.707749 0.706464 0.707749 14.1777 16.6855)"
                              stroke-width="4"/>
                        <line y1="-2" x2="19.3375" y2="-2"
                              transform="matrix(0.689819 0.723982 -0.722728 0.691132 0.838379 3)" stroke-width="4"/>
                    </svg>
                </label>

                <ul class="sub-items">
                    <li>
                        <a id="time_today"> На сегодня</a>
                    </li>
                    <li>
                        <a id="time_week"> На неделю</a>
                    </li>
                    <li>
                        <a id="time_term"> На семестр </a>
                    </li>
                </ul>
            </li>

            <li>
                <input type="radio" name="left_submenu" id="time_table_02"/>
                <label for="time_table_02" class="time">
                    Преподаватели в корпусе
                    <svg class="click" width="28" height="17" viewBox="0 0 28 17" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <line y1="-2" x2="19.3367" y2="-2"
                              transform="matrix(0.706464 -0.707749 0.706464 0.707749 14.1777 16.6855)"
                              stroke-width="4"/>
                        <line y1="-2" x2="19.3375" y2="-2"
                              transform="matrix(0.689819 0.723982 -0.722728 0.691132 0.838379 3)" stroke-width="4"/>
                    </svg>
                </label>

                <ul class="sub-items">
                    <li>
                        <a> На сегодня</a>
                    </li>
                    <li>
                        <a href="loading.html"> На неделю</a>
                    </li>
                    <li>
                        <a href="loading.html"> На семестр </a>
                    </li>
                </ul>
            </li>

            <li>
                <input type="radio" name="left_submenu" id="time_table_03"/>
                <label for="time_table_03" class="time">
                    Группы в корпусе
                    <svg class="click" width="28" height="17" viewBox="0 0 28 17" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <line y1="-2" x2="19.3367" y2="-2"
                              transform="matrix(0.706464 -0.707749 0.706464 0.707749 14.1777 16.6855)"
                              stroke-width="4"/>
                        <line y1="-2" x2="19.3375" y2="-2"
                              transform="matrix(0.689819 0.723982 -0.722728 0.691132 0.838379 3)" stroke-width="4"/>
                    </svg>
                </label>

                <ul class="sub-items">
                    <li>
                        <a> На сегодня</a>
                    </li>
                    <li>
                        <a href="loading.html"> На неделю</a>
                    </li>
                    <li>
                        <a href="loading.html"> На семестр </a>
                    </li>
                </ul>
            </li>

            <li>
                <input type="radio" name="left_submenu" id="time_table_04"/>
                <label for="time_table_04" class="time">
                    Кабинеты
                    <svg class="click" width="28" height="17" viewBox="0 0 28 17" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <line y1="-2" x2="19.3367" y2="-2"
                              transform="matrix(0.706464 -0.707749 0.706464 0.707749 14.1777 16.6855)"
                              stroke-width="4"/>
                        <line y1="-2" x2="19.3375" y2="-2"
                              transform="matrix(0.689819 0.723982 -0.722728 0.691132 0.838379 3)" stroke-width="4"/>
                    </svg>
                </label>

                <ul class="sub-items">
                    <li>
                        <a> На сегодня</a>
                    </li>
                    <li>
                        <a href="loading.html"> На неделю</a>
                    </li>
                    <li>
                        <a href="loading.html"> На семестр </a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="color">
            <h2> Включить тёмную тему </h2>
            <input type="checkbox" class="checkbox" id="themeToggleCheckbox"/>
            <label for="themeToggleCheckbox"></label>
        </div>
    </div>

    <div class="container">

        <div class="slide">
            <h3> БлаБлаБла </h3>
        </div>

        <div class="slide active now">
            <h3> Akita inu </h3>
        </div>

        <div class="slide">
            <h3> Corgi </h3>
        </div>

        <div class="slide">
            <h3> Shiba inu </h3>
        </div>

        <div class="slide">
            <h3> Border collie </h3>
        </div>
    </div>

    <div id="profile_selection_overlay" class="overlay">
        <div class="modal">
            <div class="tab-list">
                <input type="radio" name="profile_selector" id="student_tab" class="tab_selector" checked>
                <label for="student_tab" class="tab_selector_label">
                    Студент
                </label>
                <input type="radio" name="profile_selector" id="professor_tab" class="tab_selector">
                <label for="professor_tab" class="tab_selector_label">
                    Преподаватель
                </label>
            </div>
            <div class="tab-content">
                <div id="student_tab_content" class="active">
                    <select name="type" required="">
                        <option class="op" selected>Выберите факультет</option>

                    </select>

                    <select name="type" required="">
                        <option class="op" selected>Выберите группу</option>

                    </select>

                    <button type="submit" class="btn"> Показать</button>
                </div>
                <div id="professor_tab_content">
                    <select name="type" class="professor_tab" required="">
                        <option class="op" selected>Выберите преподавателя</option>
                        <option class="op">Попков</option>

                    </select>

                    <button type="submit" class="btn"> Показать</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/dark_or_light.js"></script>
<script>
    const overlay_menu = document.getElementById('overlay_menu');
    const menu = document.getElementById('menu');
    const student_tab = document.getElementById('student_tab');
    const profile_selection_overlay = $('#profile_selection_overlay');

    function toggleModal(closingObject, openingObject) {
        $(closingObject).css('display', 'none');
        $('#ham-menu').prop('checked', false)
        openingObject.addClass('active');
    }

    document.getElementById("time_today").onclick = function () {
        toggleModal([menu, overlay_menu], profile_selection_overlay);
    }

    document.getElementById("time_week").onclick = function () {
        toggleModal([menu, overlay_menu], profile_selection_overlay);
    }

    document.getElementById("time_term").onclick = function () {
        toggleModal([menu, overlay_menu], profile_selection_overlay);
    }

    $('.tab_selector').click(function (event) {
        console.log(event.target.id)
        $('.tab-content .active').removeClass('active');
        $('.tab-content').children(`#${event.target.id}_content`).addClass('active');
    })
</script>
<script src="js/slides.js"></script>

</html>
