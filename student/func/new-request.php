<?php

function formConfirmation()
{
?>
    <div class="container row ">
                <?php
                $request = [];

                foreach ($_POST as $key => $value) {
                    $request[] = $value;
                }
                $length = count($request) / 3;

                for ($i = 0; $i < $length; $i++) {
                ?>
                    <div class="section card subject">
                        <label for="">Programme</label>
                        <p><?php echo $request[$i] . "<br>"; ?></p>
                        <label for="">Session</label>
                        <p><?php echo $request[$i + 1] . "<br>"; ?></p>
                        <label for="">Course</label>
                        <p><?php echo $request[$i + 2] . "<br>"; ?></p>
                    </div>
                <?php
                }
                ?>
    </div>
<?php
}

function requestForm()
{
?>
    <div class="container row request-form">
        <div class="card form section">
            <div class="heading">
                <h2>Request Form</h2>
            </div>
            <label for="programme">Programme</label>
            <input class="chosen-value prog-input" type="text" value="" placeholder="Search programme">
            <ul class="value-list prog-list">
                <a class="value prog-value">Swinburne University of Technology</a>
                <a class="value prog-value">University of Wollongong</a>
                <a class="value prog-value">University Coventry</a>
            </ul>
            <label for="session">Session</label>
            <input class="chosen-value sess-input" type="text" value="" placeholder="Search session">
            <ul class="value-list sess-list">
                <a class="value sess-value">July 2019</a>
                <a class="value sess-value">February 2020</a>
                <a class="value sess-value">July 2020</a>
                <a class="value sess-value">February 2021</a>
            </ul>
            <label for="course-code">Course</label>
            <input class="chosen-value sub-input" type="text" value="" placeholder="Search course">
            <ul class="value-list sub-list">
                <a class="value sub-value">CSIT321 Project</a>
                <a class="value sub-value">ISIT315 Web Modelling</a>
            </ul>
        </div>
        <div class="button-row section">
            <button onclick="getSubject()">
                <i class="fas fa-plus"></i>
                <span>Add</span>
            </button>
            <button onclick="submitForm()">
                <i class="fas fa-check"></i>
                <span>Done</span>
            </button>
        </div>
    </div>
<?php
}

?>