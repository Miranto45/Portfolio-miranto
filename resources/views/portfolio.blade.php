<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $p['first_name'] }} — {{ $p['role'] }}</title>
<meta name="description" content="Portfolio de {{ $p['full_name'] }}, {{ $p['role'] }}. Projets, competences, CV et contact.">
<meta property="og:title" content="{{ $p['first_name'] }} — Portfolio">
<meta property="og:description" content="Portfolio de {{ $p['full_name'] }}.">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;600;800&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="progress" id="progress"></div>

<header class="nav">
  <a class="brand" href="#top"><span class="brand-mark">M</span> {{ $p['first_name'] }}</a>
  <button class="burger" id="burger" aria-label="Menu"><span></span><span></span><span></span></button>
  <nav class="links" id="links">
    <a href="#apropos">À propos</a>
    <a href="#competences">Compétences</a>
    <a href="#projets">Projets</a>
    <a href="#parcours">Parcours</a>
    <a href="#contact">Contact</a>
    <a class="btn-mini" href="{{ route('cv') }}">CV (PDF)</a>
  </nav>
</header>

<main id="top">

  <!-- HERO : photo + nom -->
  <section class="hero">
    <div class="hero-inner">
      <div class="photo-wrap reveal">
        <img class="photo" src="{{ asset($p['photo']) }}" alt="Photo de {{ $p['full_name'] }}">
        <span class="photo-frame"></span>
      </div>
      <div class="hero-text">
        <p class="kicker reveal">Portfolio</p>
        <h1 class="reveal">{{ $p['first_name'] }}</h1>
        <p class="fullname reveal">{{ $p['full_name'] }}</p>
        <p class="role reveal">{{ $p['role'] }}</p>
        <p class="tagline reveal">{{ $p['tagline'] }}</p>
        <p class="status reveal"><span class="dot"></span>{{ $p['status'] }}</p>
        <div class="hero-actions reveal">
          <a class="btn" href="{{ secure_asset('cv/cvmirantoandriamaherison.pdf') }}" download>Télécharger mon CV</a>
          <a class="btn ghost" href="{{ $p['github_url'] }}" target="_blank" rel="noopener">GitHub / {{ $p['github_user'] }}</a>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="strip">
    @foreach ($p['stats'] as $s)
      <div class="stat reveal"><b>{{ $s['value'] }}</b><span>{{ $s['label'] }}</span></div>
    @endforeach
  </section>

  <!-- A PROPOS -->
  <section id="apropos" class="section">
    <h2 class="reveal">À propos</h2>
    <div class="prose">
      @foreach ($p['about'] as $par)
        <p class="reveal">{{ $par }}</p>
      @endforeach
      <ul class="facts reveal">
        <li><span>Email</span><a href="mailto:{{ $p['email'] }}">{{ $p['email'] }}</a></li>
        <li><span>Téléphone</span><a href="tel:{{ $p['phone'] }}">{{ $p['phone'] }}</a></li>
        <li><span>Localisation</span>{{ $p['location'] }}</li>
        <li><span>GitHub</span><a href="{{ $p['github_url'] }}" target="_blank" rel="noopener">{{ $p['github_user'] }}</a></li>
      </ul>
    </div>
  </section>

  <!-- COMPETENCES -->
  <section id="competences" class="section">
    <h2 class="reveal">Compétences</h2>
    <div class="grid-2">
      @foreach ($p['skills'] as $g)
        <div class="card reveal">
          <h3>{{ $g['group'] }}</h3>
          <div class="tags">
            @foreach ($g['items'] as $i)<span class="tag">{{ $i }}</span>@endforeach
          </div>
        </div>
      @endforeach
    </div>
  </section>

  <!-- PROJETS -->
  <section id="projets" class="section">
    <h2 class="reveal">Projets</h2>
    <div class="projects">
      @foreach ($p['projects'] as $i => $pr)
        <article class="project reveal">
          <span class="num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
          <div class="project-body">
            <h3>{{ $pr['name'] }}</h3>
            <p>{{ $pr['description'] }}</p>
            <div class="tags">
              @foreach ($pr['tags'] as $t)<span class="tag">{{ $t }}</span>@endforeach
            </div>
          </div>
          <div class="project-links">
            @if ($pr['repo'])<a href="{{ $pr['repo'] }}" target="_blank" rel="noopener">Code →</a>@endif
            @if ($pr['demo'])<a href="{{ $pr['demo'] }}" target="_blank" rel="noopener">Démo →</a>@endif
          </div>
        </article>
      @endforeach
    </div>
    <p class="center reveal"><a class="btn ghost" href="{{ $p['github_url'] }}" target="_blank" rel="noopener">Voir tous mes dépôts GitHub</a></p>
  </section>

  <!-- PARCOURS -->
  <section id="parcours" class="section">
    <h2 class="reveal">Parcours</h2>
    <div class="grid-2">
      <div>
        <h3 class="sub reveal">Formation</h3>
        <ul class="timeline">
          @foreach ($p['education'] as $e)
            <li class="reveal"><b>{{ $e['title'] }}</b><span>{{ $e['place'] }} · {{ $e['year'] }}</span></li>
          @endforeach
        </ul>
      </div>
      <div>
        <h3 class="sub reveal">Expérience</h3>
        <ul class="timeline">
          @foreach ($p['experience'] as $x)
            <li class="reveal">
              <b>{{ $x['title'] }}</b>
              <span>{{ $x['company'] }} · {{ $x['year'] }}</span>
              <ul class="dots">
                @foreach ($x['points'] as $pt)<li>{{ $pt }}</li>@endforeach
              </ul>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="grid-2 mt">
      <div class="card reveal">
        <h3>Langues</h3>
        <ul class="pairs">
          @foreach ($p['languages'] as $l)<li><b>{{ $l['name'] }}</b><span>{{ $l['level'] }}</span></li>@endforeach
        </ul>
      </div>
      <div class="card reveal">
        <h3>Centres d'intérêt</h3>
        <div class="tags">
          @foreach ($p['interests'] as $i)<span class="tag">{{ $i }}</span>@endforeach
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="section">
    <h2 class="reveal">Contact</h2>
    <div class="grid-2">
      <div class="reveal">
        <p class="prose">Une opportunité de stage ou un projet ? Écris-moi, je réponds rapidement.</p>
        <ul class="facts">
          <li><span>Email</span><a href="mailto:{{ $p['email'] }}">{{ $p['email'] }}</a></li>
          <li><span>Téléphone</span><a href="tel:{{ $p['phone'] }}">{{ $p['phone'] }}</a></li>
          <li><span>GitHub</span><a href="{{ $p['github_url'] }}" target="_blank" rel="noopener">{{ $p['github_user'] }}</a></li>
        </ul>
        <a class="btn" href="{{ asset('cv/cvmirantoandriamaherison.pdf') }}" download>Télécharger mon CV (PDF)</a>
      </div>

      <form class="form card reveal" method="POST" action="{{ route('contact') }}">
        @csrf
        @if (session('success'))<p class="alert ok">{{ session('success') }}</p>@endif
        @if (session('error'))<p class="alert ko">{{ session('error') }}</p>@endif

        <label>Votre nom
          <input type="text" name="name" value="{{ old('name') }}" required>
          @error('name')<em>{{ $message }}</em>@enderror
        </label>
        <label>Votre email
          <input type="email" name="email" value="{{ old('email') }}" required>
          @error('email')<em>{{ $message }}</em>@enderror
        </label>
        <label>Sujet
          <input type="text" name="subject" value="{{ old('subject') }}">
        </label>
        <label>Message
          <textarea name="message" rows="5" required>{{ old('message') }}</textarea>
          @error('message')<em>{{ $message }}</em>@enderror
        </label>
        <button class="btn" type="submit">Envoyer le message</button>
      </form>
    </div>
  </section>
</main>

<footer class="footer">
  <p>© {{ date('Y') }} {{ $p['full_name'] }}</p>
  <p><a href="{{ $p['github_url'] }}" target="_blank" rel="noopener">github.com/{{ $p['github_user'] }}</a></p>
</footer>

<script src="{{ secure_asset('js/main.js') }}"></script>
</body>
</html>
