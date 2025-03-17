@props(['avatar', 'name', 'username', 'color', 'badge'])

<div>
    <ul class="list-group mb-3" style="max-width: 360px">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-2">
                <input class="form-check-input me-1" type="checkbox">
                <img class="rounded-circle" style="width: 42px; height: 42px" src="https://pm1.aminoapps.com/8761/1c4a1988511460883da30ec8b3852275d0d88d15r1-162-194v2_uhq.jpg" alt="">
                <span class="d-flex flex-column gap-0">
                    <h6 class="m-0" style="font-size: 16px">Quirrel</h6>
                    <p class="m-0 text-muted" style="font-size: 14px">@quirrel</p>
                </span>
            </div>
                <span class="badge bg-primary rounded-pill">verified</span>
        </li>
    </ul>
</div>