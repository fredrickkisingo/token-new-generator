<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('consumer.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="consumer_key">Consumer Key</label>
                            <input type="text" class="form-control" id="consumer_key" name="consumer_key" required>
                        </div>
                        <div class="form-group">
                            <label for="consumer_secret">Consumer Secret</label>
                            <input type="password" class="form-control" id="consumer_secret" name="consumer_secret" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
