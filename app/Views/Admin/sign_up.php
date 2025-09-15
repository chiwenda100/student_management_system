<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login & Register</title>

  <style>
    :root {
      --bg:#f3f6fb;
      --card:#ffffff;
      --accent:#2563eb;
      --muted:#6b7280;
      --radius:12px;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    body {
      margin:0;
      background:linear-gradient(180deg, #eef2ff 0%, var(--bg) 100%);
      display:flex;
      align-items:center;
      justify-content:center;
      min-height:100vh;
      padding:24px;
      color:#111827;
    }

    .container {
      width:100%;
      max-width:900px;
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap:24px;
    }

    .card {
      background:var(--card);
      border-radius:var(--radius);
      box-shadow: 0 6px 24px rgba(15,23,42,0.08);
      padding:24px;
    }

    h2 {
      margin-top:0;
      margin-bottom:16px;
      font-size:22px;
      color:#111827;
    }

    form {
      display:flex;
      flex-direction:column;
      gap:12px;
    }

    label {
      font-size:13px;
      color:var(--muted);
    }

    input, select {
      padding:12px;
      border-radius:10px;
      border:1px solid #e6e9ef;
      font-size:15px;
      outline:none;
    }

    input:focus, select:focus {
      border-color:var(--accent);
      box-shadow:0 0 0 3px rgba(37,99,235,0.15);
    }

    button {
      margin-top:8px;
      padding:12px;
      border:none;
      border-radius:10px;
      background:var(--accent);
      color:white;
      font-weight:600;
      font-size:15px;
      cursor:pointer;
    }

    button:hover {
      background:#1e4ed8;
    }

    .muted {
      font-size:13px;
      color:var(--muted);
      text-align:center;
      margin-top:8px;
    }

    @media(max-width:780px) {
      .container {
        grid-template-columns:1fr;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- REGISTER CARD -->
    <div class="card">
      <h2>Register</h2>
      <form action="register.php" method="post">
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="name" required placeholder="John Doe">

        <label for="registerEmail">Email</label>
        <input type="email" id="registerEmail" name="email" required placeholder="you@example.com">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required minlength="6" placeholder="At least 6 characters">

        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required minlength="6" placeholder="Re-type password">

        <label for="role">Role</label>
        <select id="role" name="role" required>
          <option value="">Select role</option>
          <option value="student">Student</option>
          <option value="teacher">Teacher</option>
        </select>

        <button type="submit">Create account</button>
        <p class="muted">Don’t have an account?<a href="/">Login →</a></p>
      </form>
    </div>
  </div>
</body>
</html>
