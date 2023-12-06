<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="generator" content="Hugo 0.84.0" />
  <title>{{ $title }}</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('/dist/css/bootstrap.min.css') }}" rel="stylesheet" />

  {{-- Anime on scroll --}}
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="{{ asset('/assets/dashboard.css') }}" rel="stylesheet" />

</head>