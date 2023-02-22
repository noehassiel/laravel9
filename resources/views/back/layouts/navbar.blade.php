<nav class="nav" id="nav">
    <span class="badge rounded-pill text-bg-light">• ORD</span>

    <div class="d-flex flex-column align-items-center justify-content-center g-buttons">
        <a href="" class="nav-btn active">
            <ion-icon name="grid" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                data-bs-placement="right" data-bs-title="Inicio">
            </ion-icon>
            <span id="btnTextNav" class="d-none btn-text-nav">Inicio</span>
        </a>
        <a href="{{ route('orders.index') }}" class="nav-btn">
            <ion-icon name="file-tray-stacked" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                data-bs-placement="right" data-bs-title="Ordenes"></ion-icon>
            <span id="btnTextNav" class="d-none btn-text-nav">Ordenes</span>
        </a>
        <a href="" class="nav-btn">
            <ion-icon name="people-circle" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                data-bs-placement="right" data-bs-title="Usuarios"></ion-icon>
            <span id="btnTextNav" class="d-none btn-text-nav">Usuarios</span>
        </a>
        <a href="" class="nav-btn">
            <ion-icon name="cog" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip"
                data-bs-placement="right" data-bs-title="Configuración"></ion-icon>
            <span id="btnTextNav" class="d-none btn-text-nav">Configuración</span>
        </a>
    </div>

    <button class="toggle-nav" id="navToggle">
        <ion-icon name="arrow-forward-outline"></ion-icon>
    </button>
</nav>

<div class="movil-nav d-flex d-md-none">
    <div>Logo</div>
</div>
