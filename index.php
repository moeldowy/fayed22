<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <form class="row g-3" action="profile.php" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
            <div class="col-12">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="01xxx-xxx-xxx" name="phone">
            </div>
            <div class="col-12">
                <label for="website" class="form-label">Website </label>
                <input type="url" class="form-control" id="website" placeholder="https://your-site.com" name="website">
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="col-md-4">
                <label for="facebook" class="form-label">Facebook</label>
              <input type="url" class="form-control" id="facebook" name="facebook">
            </div>
           
          
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Show Profile</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
