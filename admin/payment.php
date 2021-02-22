<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/admin/admin.css" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body>
    <?php include_once('./components/nav.php') ?>
    <div class="container">
      <div class="content-container">
        <div class="options-container">
          <button class="show-options">
            <span>Options</span>
            <i class="fas fa-caret-right"></i>
          </button>
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
              <span
                >Show
                <input type="number" name="entries" value="5" required />
                entries</span
              >
            </form>
          </div>
        </div>
        <div class="heading">
          <h2>Payment</h2>
        </div>
        <div class="card request-list">
          <table>
            <tr>
              <th>Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Status</th>
            </tr>
            <tr>
              <td>Soo Yong Jie</td>
              <td>2020/12/26</td>
              <td>3:12pm</td>
              <td class="status">
                <span>Paid</span>
                <a href="" class="arrow">
                  <i class="fas fa-arrow-right"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>Soo Yong Jie</td>
              <td>2020/12/26</td>
              <td>3:12pm</td>
              <td class="status">
                <span>Pending</span>
                <a href="" class="arrow">
                  <i class="fas fa-arrow-right"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
