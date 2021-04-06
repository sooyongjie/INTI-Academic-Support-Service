<?php

require_once('./func/func.php');
require("../db_connect.php");

function showProgrammes()
{
    $query = "SELECT * FROM `programme`";
    $result = selectQuery($query);
    if ($result) {
        foreach ($result as $prog) {
            showProgram($prog);
        }
    }
}

function showProgram($prog)
{ ?>
    <div class="heading">
        <h3><?php echo $prog['progName'] ?></h3>
        <button onclick="showModal('sub')">
            <i class="fas fa-plus"></i>
            <span>New Subject</span>
        </button>
    </div>
    <div class="card request-list">
        <table>
            <tr>
                <th>Subject</th>
                <th>Price</th>
                <th>File</th>
            </tr>
            <tr>
                <td>CSCI334 System Design</td>
                <td>RM1</td>
                <td class="status">
                    <span class="file">csci334.pdf</span>
                    <a href="" class="arrow">
                        <i class="fas fa-file-upload"></i>
                    </a>
                </td>
            </tr>
        </table>
    </div>
<?php }
