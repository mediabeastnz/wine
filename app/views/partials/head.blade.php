<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WineApp</title>

  @section('styles')
  {{ HTML::style('css/app.css') }}
  @show

</head>
<body>

  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">

        <h1><a href="/">WineApp</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>

    <section class="top-bar-section">

      <ul class="right">
        @if(Auth::check())
        <li><a href="/bottles/create">Add Bottle</a></li>
        <li><a href="/bottles">View Bottles</a></li>
        <li class="has-dropdown"><a href="#">{{Auth::User()->firstname}}</a>
          <ul class="dropdown">
            <li><a href="/users/account">Edit Account Details</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>

        @else
        <li><a href="/users/create">Register</a></li>
        <li><a href="/login">Login</a></li>
        @endif
      </ul>
    </section>
  </nav>
