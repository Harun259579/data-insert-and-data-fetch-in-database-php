<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Information Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4">User Information Form</h2>
  <form>
    <div class="row mb-3">
      <div class="col">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" placeholder="Enter first name">
      </div>
      <div class="col">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" placeholder="Enter last name">
      </div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>

    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username">
    </div>

    <div class="mb-3">
      <label for="twitter" class="form-label">Twitter Handle</label>
      <input type="text" class="form-control" id="twitter" placeholder="@yourhandle">
    </div>

    <div class="mb-3">
      <label for="url" class="form-label">Website URL</label>
      <input type="url" class="form-control" id="url" placeholder="https://example.com">
    </div>

    <div class="row mb-3">
      <div class="col">
        <label for="country" class="form-label">Country</label>
        <input type="text" class="form-control" id="country" placeholder="Enter country">
      </div>
      <div class="col">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" placeholder="Enter city">
      </div>
    </div>

    <div class="mb-3">
      <label for="hobbies" class="form-label">Hobbies</label>
      <input type="text" class="form-control" id="hobbies" placeholder="E.g. Reading, Gaming, Traveling">
    </div>

    <div class="mb-3">
      <label class="form-label d-block">Gender</label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
        <label class="form-check-label" for="female">Female</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="other" value="other">
        <label class="form-check-label" for="other">Other</label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
