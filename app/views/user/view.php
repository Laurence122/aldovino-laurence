<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Users / View — GitHub style</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#0d1117;
      --panel:#0f1720;
      --muted:#8b949e;
      --accent:#2ea44f;
      --danger:#f85149;
      --radius:10px;
      --input-bg: #010409;
      font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      color-scheme: dark;
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;background:linear-gradient(180deg,var(--bg),#030409);color:#c9d1d9}
    header{height:64px;display:flex;align-items:center;justify-content:space-between;padding:12px 24px;border-bottom:1px solid rgba(255,255,255,0.03)}
    .brand{display:flex;gap:12px;align-items:center}
    .brand svg{width:32px;height:32px;display:block}
    .brand h1{margin:0;font-size:16px;font-weight:600}
    nav{display:flex;gap:14px;align-items:center}
    nav a{color:var(--muted);text-decoration:none;font-size:13px}

    .container{max-width:980px;margin:36px auto;padding:0 20px}
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.03);padding:28px;border-radius:var(--radius);box-shadow:0 6px 18px rgba(2,6,23,0.6)}

    h2{margin:0;font-size:20px}

    table{width:100%;border-collapse:collapse;margin-top:16px;font-size:14px}
    th,td{padding:10px 12px;text-align:left;border-top:1px solid rgba(255,255,255,0.08)}
    th{background:rgba(255,255,255,0.02);font-weight:600;color:#c9d1d9;font-size:13px}
    tr:hover td{background:rgba(255,255,255,0.02)}

    a.action-link{color:var(--accent);text-decoration:none;font-weight:500;font-size:13px}
    a.action-link.delete{color:var(--danger)}
    a.action-link:hover{text-decoration:underline}

    /* Create New User Button */
    .create-btn {
      background: var(--accent);
      color: #fff;
      padding: 8px 14px;
      border-radius: var(--radius);
      font-size: 13px;
      font-weight: 600;
      text-decoration: none;
      transition: background 0.2s;
    }
    .create-btn:hover {
      background: #2c974b; /* slightly darker green */
    }
  </style>
</head>
<body>
  <header>
    <div class="brand">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M12 2c-5.52 0-10 4.48-10 10 0 4.42 2.87 8.17 6.84 9.5.5.09.68-.22.68-.49 0-.24-.01-.87-.01-1.71-2.78.61-3.37-1.34-3.37-1.34-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.61.07-.61 1 .07 1.53 1.03 1.53 1.03.89 1.53 2.34 1.09 2.91.83.09-.65.35-1.09.64-1.34-2.22-.25-4.56-1.11-4.56-4.95 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.28.1-2.66 0 0 .84-.27 2.75 1.02A9.56 9.56 0 0112 6.8c.85.004 1.71.115 2.5.338 1.9-1.29 2.74-1.02 2.74-1.02.55 1.38.2 2.41.1 2.66.64.7 1.03 1.6 1.03 2.68 0 3.85-2.34 4.69-4.57 4.94.36.31.68.92.68 1.86 0 1.34-.01 2.42-.01 2.75 0 .27.18.59.69.49C19.14 20.17 22 16.42 22 12c0-5.52-4.48-10-10-10z" fill="currentColor"/>
      </svg>
      <h1>My Projects</h1>
    </div>
    <nav>
      <a href="#">Pull requests</a>
      <a href="#">Issues</a>
      <a href="#">Marketplace</a>
      <a href="#">Explore</a>
    </nav>
  </header>

  <main class="container">
    <section class="card">
      <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
        <h2>All users</h2>
        <a href="<?= site_url('user/create'); ?>" class="create-btn">+ Create New User</a>
      </div>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach (html_escape($users) as $user): ?>
            <tr>
              <td><?= $user['id']; ?></td>
              <td><?= $user['username']; ?></td>
              <td><?= $user['email']; ?></td>
              <td>
                <a class="action-link" href="<?= site_url('user/update/'.$user['id']); ?>">Edit</a>
                &nbsp;|&nbsp;
                <a class="action-link delete" href="<?= site_url('user/delete/'.$user['id']); ?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </main>
</body>
</html>
