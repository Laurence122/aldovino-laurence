<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User / Create — GitHub style</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root{
      --bg:#0d1117; /* GitHub dark */
      --panel:#0f1720; 
      --muted:#8b949e;
      --accent:#2ea44f; /* green */
      --glass: rgba(255,255,255,0.02);
      --radius:10px;
      --input-bg: #010409;
      font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      color-scheme: dark;
    }
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;background:linear-gradient(180deg,var(--bg),#030409);color:#c9d1d9}
    header{
      height:64px;display:flex;align-items:center;justify-content:space-between;padding:12px 24px;border-bottom:1px solid rgba(255,255,255,0.03)
    }
    .brand{display:flex;gap:12px;align-items:center}
    .brand svg{width:32px;height:32px;display:block}
    .brand h1{margin:0;font-size:16px;font-weight:600}
    nav{display:flex;gap:14px;align-items:center}
    nav a{color:var(--muted);text-decoration:none;font-size:13px}

    .container{max-width:980px;margin:36px auto;padding:0 20px}
    .grid{display:grid;grid-template-columns:1fr 360px;gap:24px}

    /* Card */
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));border:1px solid rgba(255,255,255,0.03);padding:28px;border-radius:var(--radius);box-shadow:0 6px 18px rgba(2,6,23,0.6)}

    h2{margin:0 0 6px 0;font-size:20px}
    p.lead{margin:0 0 18px 0;color:var(--muted);font-size:13px}

    form{display:flex;flex-direction:column;gap:14px}
    label{font-size:13px;color:var(--muted);margin-bottom:6px;display:block}
    .field{display:flex;flex-direction:column}
    input[type="text"],input[type="email"],input[type="password"]{
      background:var(--input-bg);border:1px solid rgba(255,255,255,0.04);padding:10px 12px;border-radius:8px;color:inherit;font-size:14px;outline:none
    }
    input:focus{box-shadow:0 0 0 3px rgba(46,164,79,0.12);border-color:rgba(46,164,79,0.9)}

    .submit-row{display:flex;gap:12px;align-items:center;margin-top:8px}
    .btn{
      display:inline-flex;align-items:center;gap:8px;padding:8px 12px;border-radius:8px;font-weight:600;border:none;cursor:pointer
    }
    .btn-primary{background:var(--accent);color:#fff}
    .btn-secondary{background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--muted)}

    /* right column */
    .sidebar .meta{font-size:13px;color:var(--muted);line-height:1.5}
    .muted{color:var(--muted)}

    /* small helper */
    .avatar{width:72px;height:72px;border-radius:10px;background:linear-gradient(135deg,#03060a,#0b1220);display:flex;align-items:center;justify-content:center;border:1px solid rgba(255,255,255,0.03)}

    footer{margin-top:26px;color:var(--muted);font-size:13px}

    /* responsive */
    @media (max-width:900px){.grid{grid-template-columns:1fr}.sidebar{order:2}}
  </style>
</head>
<body>
  <header>
    <div class="brand">
      <!-- GitHub-like mark (generic) -->
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
    <div class="grid">
      <section class="card">
        <h2>Create a new user</h2>
        <p class="lead">Add a user account. You can invite collaborators later.</p>

        <form method="post" action="<?=site_url('user/create') ?>">
          <div class="field">
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="e.g. octocat" required>
          </div>

          <div class="field">
            <label for="email">Email address</label>
            <input id="email" name="email" type="email" placeholder="you@example.com" required>
          </div>

          <div class="field">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Choose a strong password" required>
          </div>

          <div class="submit-row">
            <button class="btn btn-primary" type="submit">
              <svg width="14" height="14" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M5 3.5v9l6-4.5-6-4.5z" fill="currentColor"/></svg>
              Create user
            </button>
            <button class="btn btn-secondary" type="button" onclick="location.href='/'">Cancel</button>
          </div>

          <footer>
            <p class="muted">By creating an account you agree to the Terms of Service and Privacy Policy.</p>
          </footer>
        </form>
      </section>

      <aside class="sidebar">
        <div class="card">
          <div style="display:flex;gap:12px;align-items:center">
            <div class="avatar" aria-hidden="true">
              <svg width="36" height="36" viewBox="0 0 24 24" fill="none"><path d="M12 2a10 10 0 100 20 10 10 0 000-20z" fill="currentColor"/></svg>
            </div>
            <div>
              <strong>Quick tips</strong>
              <div class="muted" style="margin-top:6px">Choose a unique username and a strong password. You can customize the profile later.</div>
            </div>
          </div>

          <hr style="margin:16px 0;border:none;border-top:1px solid rgba(255,255,255,0.03)">

          <div class="meta">
            <div><strong>Username rules</strong></div>
            <div class="muted">Only alphanumeric characters and hyphens. No spaces. Max 39 characters.</div>

            <div style="margin-top:10px"><strong>Password strength</strong></div>
            <div class="muted">At least 8 characters. Use a mix of letters, numbers, and symbols.</div>
          </div>
        </div>
      </aside>

    </div>
  </main>
</body>
</html>
