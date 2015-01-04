@include('partials.head')

  <div class="row">
    <div class="large-12 medium-12 small-12 column">

      <h2>Forgotten Password</h2>

      @if (Session::get('status'))
      <div class="alert-box success">{{ Session::get('status') }}</div>
      @elseif (Session::get('error'))
      <div class="alert-box warning">{{ Session::get('error') }}</div>
      @endif

      <form action="{{ action('RemindersController@postRemind') }}" method="POST">
        <input type="email" name="email" placeholder="email@domain.com">
        <input type="submit" class="button expand" value="Send Reminder">
      </form>
    </div>
  </div>

@include('partials.foot')
