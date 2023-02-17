<!-- Необходимо создать массив в самом верху php-файла, в котором будет 
описываться опыт работы (правая верхняя часть сайта).
Необходимо вставить из массива данные на странице, а именно, 
название работ, дату и описание для каждой работы. 
Если хотите усложнить себе задание, то можете попробовать 
вывести с помощью цикла эти данные -->

<?php
$workExperience = [
    [
        'position' => 'Front End Developer',
        'periodStart' => 'Jan 2015',
        'periodEnd' => 'Current',
        'description' => 'Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.',
    ],
    [
        'position' => 'Web Developer / something.com',
        'periodStart' => 'Mar 2012',
        'periodEnd' => 'Dec 2014',
        'description' => 'Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.',

    ],
    [
        'position' => 'Graphic Designer / designsomething.com',
        'periodStart' => 'Jun 2010',
        'periodEnd' => 'Mar 2012',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Jost', sans-serif;
        }
    </style>
</head>

<body class="w3-light-grey">
    <div class="w3-content w3-margin-top" style="max-width:1400px;">
        <div class="w3-row-padding">
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                            <h2>Имя</h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Профессия</p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Город, страна</p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>E-mail</p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Телефон</p>
                        <hr>
                        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
                        <p>Adobe Photoshop</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
                        </div>
                        <p>Photography</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                                <div class="w3-center w3-text-white">80%</div>
                            </div>
                        </div>
                        <p>Illustrator</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
                        </div>
                        <p>Media</p>
                        <div class="w3-light-grey w3-round-xlarge w3-small">
                            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
                        </div>
                        <br>
                        <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
                        <p>Английский</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                        </div>
                        <p>Испанский</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
                        </div>
                        <p>Немецкий</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
                        </div>
                        <br>
                    </div>
                </div><br>
            </div>
            <div class="w3-twothird">
                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
                    <?php for ($i = 0; $i < count($workExperience); $i++) : ?>
                        <div class="w3-container">
                            <h5 class="w3-opacity"><b>
                                    <p><?php echo $workExperience[$i]["position"]; ?></p>
                                </b></h5>
                            <h6 class="w3-text-teal">
                                <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                                <?php echo $workExperience[$i]["periodStart"]; ?> -
                                <?php if ($i == 0) : ?>
                                    <span class="w3-tag w3-teal w3-round">
                                        <?php echo $workExperience[$i]["periodEnd"]; ?>
                                    </span>
                                <?php else : ?>
                                    <?php echo $workExperience[$i]["periodEnd"]; ?>
                                <?php endif; ?>
                            </h6>
                            <p><?php echo $workExperience[$i]["description"]; ?></p>
                            <hr>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>gb.ru</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                        <p>Web Development! All I need to know in one place</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>London Business School</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                        <p>Master Degree</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>School of Coding</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
                        <p>Bachelor Degree</p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="w3-container w3-teal w3-center w3-margin-top">
        <p>Find me on social media.</p>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </footer>
</body>
</html>