<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $concert->artista }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/app.css">

</head>

<body>

<div class="container py-5">

    <div class="mb-4">
        <a href="{{ route('concerts.index') }}"
           class="btn btn-light fw-semibold">

            ← Volver

        </a>
    </div>

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card border-0 shadow-lg overflow-hidden concert-card">

                <img src="{{ $concert->foto }}"
                     class="w-100"
                     style="height: 500px; object-fit: cover;"
                     alt="{{ $concert->artista }}">

                <div class="p-5">

                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-3 mb-4">

                        <div>

                            <h1 class="display-4 fw-bold text-white mb-2">
                                {{ $concert->artista }}
                            </h1>

                            <h4 class="text-light opacity-75">
                                {{ $concert->tour }}
                            </h4>

                        </div>

                        <a href="{{ $concert->spotify_link }}"
                           target="_blank"
                           class="btn spotify-btn px-4 py-3">
                            Abrir Spotify
                        </a>

                    </div>

                    <div class="row g-4 mb-5">

                        <div class="col-md-4">
                            <div class="info-box">
                                <h6>📍 Venue</h6>
                                <p>{{ $concert->venue }}</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info-box">
                                <h6>🌆 Ciudad</h6>
                                <p>{{ $concert->ciudad }}</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="info-box">
                                <h6>📅 Fecha</h6>
                                <p>
                                    {{ \Carbon\Carbon::parse($concert->fecha)->format('d/m/Y') }}
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="description-box">

                        <h3 class="text-white mb-3">
                            Recuerdo del concierto
                        </h3>

                        <p class="text-light fs-5 lh-lg">
                            {{ $concert->descripcion }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>