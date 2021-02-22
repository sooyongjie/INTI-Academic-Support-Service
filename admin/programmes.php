<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Courses</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/admin/admin.css" />
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <?php include_once('./components/nav.php') ?>
  <div class="container">
    <div class="content-container">
      <div class="options-container">
        <div class="show-options">
          <span>Options</span>
          <i class="fas fa-caret-right"></i>
        </div>
        <div class="options">
          <div class="sort">
            <p>Sort By</p>
            <form method="GET">
              <input type="hidden" name="sort" value="name" />
              <button type="submit">
                <span>Name</span>
              </button>
            </form>
            <form method="GET">
              <input type="hidden" name="sort" value="date" />
              <button type="submit">
                <span>Date</span>
              </button>
            </form>
          </div>
          <form method="GET">
            <span>Show</span>
            <input type="number" name="entries" value="5" required />
            <span>entries</span>
          </form>
        </div>
      </div>
      <div class="heading">
        <h2>Programmes</h2>
        <button>
          <i class="fas fa-plus"></i>
          <span>New Programme</span>
        </button>
      </div>
      <div class="heading">
        <h3>University of Wollongong</h3>
        <button>
          <i class="fas fa-plus"></i>
          <span>New Subject</span>
        </button>
      </div>
      <div class="card request-list">
        <table>
          <tr>
            <th>Subject</th>
            <th>Code</th>
            <th>Price</th>
            <th>File</th>
          </tr>
          <tr>
            <td>System Design</td>
            <td>CSCI334</td>
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
    </div>
  </div>
</body>

</html>