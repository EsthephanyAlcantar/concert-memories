<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concert Memories</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <div class="container py-5">

        <div class="text-center mb-5">

            <h1 class="display-2 fw-bold text-white">
                Concert memories
            </h1>

            <p class="lead text-light opacity-75">
                Guarda y revive los eventos en vivo que marcaron tu historia
            </p>

            <div class="mt-4">

            <a href="{{ route('concerts.create') }}"
            class="btn spotify-btn px-4 py-3">
                Agregar concierto
            </a>

            <div class="row justify-content-center mb-5 mt-4">

                <div class="col-lg-5">

                    <input
                        type="text"
                        id="searchInput"
                        class="form-control form-control-lg search-input"
                        placeholder="Buscar artista o tour..."
                    >

                </div>

            </div>

        </div>

    </div>

        <div class="row justify-content-center">

            @foreach($concerts as $concert)

                <div class="col-lg-4 col-md-6 mb-5 concert-item">

                    <div class="card concert-card border-0 shadow-lg h-100">

                        <img src="{{ $concert->foto }}"
                             class="card-img-top concert-image"
                             alt="{{ $concert->artista }}">

                        <div class="card-body p-4">

                            <h2 class="fw-bold text-white">
                                {{ $concert->artista }}
                            </h2>

                            <p class="text-light opacity-75 fs-5">
                                {{ $concert->venue }}
                                —
                                {{ \Carbon\Carbon::parse($concert->fecha)->format('Y') }}
                            </p>

                            <p class="text-light concert-description">
                                {{ $concert->descripcion }}
                            </p>

                            <div class="concert-rating mb-4">
                                @for ($i = 0; $i < $concert->rating; $i++)
                                    ⭐
                                @endfor
                            </div>

                            <div class="d-flex gap-2 mt-4 card-actions">

                                <a href="{{ route('concerts.show', $concert) }}"
                                class="btn btn-memory flex-fill">
                                    Revivir
                                </a>

                                <a href="{{ $concert->spotify_link }}"
                                target="_blank"
                                class="btn spotify-btn flex-fill">
                                    Spotify
                                </a>

                                <form action="{{ route('concerts.destroy', $concert) }}"
                                    method="POST"
                                    class="flex-fill m-0">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-delete w-100"
                                            onclick="return confirm('¿Seguro que quieres eliminar este concierto?')">
                                        Eliminar
                                    </button>

                                </form>

                            </div>

                            <a href="{{ route('concerts.edit', $concert) }}"
                            class="btn btn-edit w-100 mt-3">
                                Editar concierto
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

    <script>

    const searchInput = document.getElementById('searchInput');

    searchInput.addEventListener('keyup', function() {

        const searchValue = this.value.toLowerCase();

        const concerts = document.querySelectorAll('.concert-item');

        concerts.forEach(concert => {

            const text = concert.innerText.toLowerCase();

            if(text.includes(searchValue)) {

                concert.style.display = 'block';

            } else {

                concert.style.display = 'none';

            }

        });

    });

    </script>

    <footer class="footer-custom mt-5">

        <div class="container">

            <p class="mb-1">
                Alumna: Esthephany Alcantar
            </p>

            <p class="mb-1">
                PI. Aplicación web dinámica en un servicio de la nube
            </p>

            <p class="mb-0">
                2026
            </p>

        </div>

    </footer>

</body>
</html>