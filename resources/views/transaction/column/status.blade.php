<div class="badge {{($row->status = 1) ? 'bg-success' : 'bg-warning' }}" >{{\App\Models\DepositTransaction::PAYMENT_STATUS[$row->status]}}</div>
