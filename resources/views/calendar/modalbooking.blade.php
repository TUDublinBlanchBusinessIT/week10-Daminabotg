<!-- Bootstrap 5 Modal -->
<div id="fullCalModal" class="modal fade" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title" id="modalTitle">Create Booking</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="bookingForm" action="{{ route('bookings.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Member ID</label>
                        <input type="text" class="form-control" name="memberid" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Booking Date</label>
                        <input type="date" class="form-control" id="bookingDate" name="bookingdate" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Start Time</label>
                        <input type="time" class="form-control" id="starttime" name="starttime" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">End Time</label>
                        <input type="time" class="form-control" id="endtime" name="endtime" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Court ID</label>
                        <input type="text" class="form-control" name="courtid" required>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" id="submitButton" class="btn btn-primary">
                            Create Booking
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>