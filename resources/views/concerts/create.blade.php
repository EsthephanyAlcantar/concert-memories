<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Concierto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/app.css">

</head>

<body>

    <div class="container py-5">

        <div class="text-center mb-5">

            <h1 class="display-4 fw-bold text-white">
                Agregar Concierto
            </h1>

            <p class="text-light opacity-75">
                Guarda un nuevo recuerdo musical
            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card border-0 shadow-lg p-4 concert-card">

                    <form action="{{ route('concerts.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label text-white">Artista</label>
                            <input type="text"
                                   name="artista"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">Tour</label>
                            <input type="text"
                                   name="tour"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">Venue</label>
                            <input type="text"
                                   name="venue"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">Ciudad</label>
                            <input type="text"
                                   name="ciudad"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">Fecha</label>
                            <input type="date"
                                   name="fecha"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">Descripción</label>

                            <textarea name="descripcion"
                                      rows="4"
                                      class="form-control"
                                      required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-white">
                                Link de Spotify
                            </label>

                            <input type="text"
                                   name="spotify_link"
                                   class="form-control">
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-white">
                                Rating
                            </label>
                            <select
                                name="rating"
                                class="form-select"
                            >
                                <option value="5">⭐⭐⭐⭐⭐ 5/5</option>
                                <option value="4">⭐⭐⭐⭐ 4/5</option>
                                <option value="3">⭐⭐⭐ 3/5</option>
                                <option value="2">⭐⭐ 2/5</option>
                                <option value="1">⭐ 1/5</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-white">
                                URL de foto ilustrativa (Google Imágenes)
                            </label>

                            <input type="text"
                                   name="foto"
                                   class="form-control"
                            >
                        </div>

                        <button type="submit"
                                class="btn spotify-btn w-100">

                            Guardar concierto

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <script>

        const urlInput = document.querySelector('input[name="foto"]');
        const imageInput = document.querySelector('input[name="image_upload"]');

        imageInput.addEventListener('change', function(){

            if(this.files.length > 0){

                urlInput.value = '';
                urlInput.disabled = true;

            } else {

                urlInput.disabled = false;

            }

        });

        urlInput.addEventListener('input', function(){

            if(this.value.trim() !== ''){

                imageInput.disabled = true;

            } else {

                imageInput.disabled = false;

            }

        });

    </script>

</body>
</html>