<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Demander une nouvelle réservation</div>

                <div class="card-body">
                    <p>Cliquez sur le bouton ci-dessous pour lancer une demande de réservation :</p>
                    <form action="{{ route('reservations.store') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Demander une réservation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>