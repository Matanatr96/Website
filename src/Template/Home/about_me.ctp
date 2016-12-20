<!DOCTYPE html>

<?= $this->element("imports"); ?>
<?= $this->Html->css('matanatr.css') ?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <?= $this->Html->charset() ?>
        <?= $this->element('imports') ?>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
    </head>
    <body>
        <div class="container">
            <div class="container">
                <div id="color">
                    <li style="background-color: #73C2FB; margin-left: 15px;"></li>
                    <li style="background-color: #1E90FF"></li>
                    <li style="background-color: #007FFF"></li>
                    <li style="background-color: #00BFFF"></li>
                    <li style="background-color: #0070FF"></li>
                </div>

                <div class="container">
                    <div align="center" class="" style="margin-top: 25px;">
                        <p class="size1 grey">Anush Mattapalli</p>
                        <p class="size2 lightGrey"><i>Georgia Institute of Technology <span style="color: #1E90FF">|</span>
                                Class of 2018</i></p>
                    </div>
                    <div align="center">
                        <hr id="hr1" noshade="true" color="#DDDDDD">
                    </div>
                    <p id="about" style="width:80%;" class="moveRight marbot"><b>About me:</b> I am a rising junior at georgia
                        tech looking to export my potential into a formidable company!</p>
                    <div id="factDiv">
                        <p id="facts" class="moveRight marbot"><b>Two Truths and a Lie:</b></p>
                        <p class="marbot moveRight martop">1. I am a black belt in tae-kwon-do</p>
                        <p class="marbot moveRight martop">2. I have been to 33 Different states in the country </p>
                        <p class="marbot moveRight martop">3. I can speak 3.5 languages.</p>
                    </div>
                    <div align="center">
                        <hr id="hr1" noshade="true" color="#DDDDDD">
                    </div>
                </div>

                <div class="container">
                    <div align="center">
                        <p class="size2 grey">Education</p>
                        <p class="size3 lightGrey">Georgia Institute of Technology</p>
                    </div>
                    <p class="marbot moveRight martop"><i>Bachelor's Degree, Major: Computer Science, Minor: Applied
                            Mathematics</i></p>
                    <div>
                        <div class=""><b>Core GPA:</b> 3.69</div>
                        <div class=""><b>Minor GPA:</b> 3.56</div>
                    </div>
                    <div class="marbot moveRight martop">
                        <div style="float:left">
                            <p style="margin-bottom:0px"><b>Major Coursework</b></p>
                            <ul id="cw1" style="margin-bottom:10px; margin-top:3px;">
                                <li>CS 1301 - Intro to Python</li>
                                <li>CS 1331 - Intro to Java</li>
                                <li>CS 1332 - Discrete Structures and Algorithms</li>
                            </ul>
                        </div>
                        <div style="float:left">
                            <p style="margin-bottom:0px"><b>Minor Coursework</b></p>
                            <ul id="cw2" style="margin-bottom:10px; margin-top:3px;">
                                <li>Math 1502 - Calc 2</li>
                                <li>Math 3215 - Combinatorix</li>
                                <li>Math 2605 - Linear Algebra 1</li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </body>
</html>