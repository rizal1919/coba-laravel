<nav class="navbar navbar-expand-lg navbar-dark bg-danger text-center">
<div class="container p-3">
  <a class="navbar-brand" href="/">BLOG | Rizal Fathurrahman</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ ($active === 'Home') ? 'active' : '' }}" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($active === 'About') ? 'active' : '' }}" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ($active === 'Posts') ? 'active' : '' }}" href="/blog">Posts</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link {{ ($active === 'Category') ? 'active' : '' }}" href="/categories">Categories</a>
      </li>
    </ul>
  </div>
  </div>
</nav>