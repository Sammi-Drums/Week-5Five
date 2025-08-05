<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content" action="register.php" method="POST">
        <div class="modal-header">
        <h5 class="modal-title">Register for a Course</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="mb-3"><label class="form-label">First Name</label><input type="text" name="first_name" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Parent Name</label><input type="text" name="parent_name" class="form-control" required></div>
        <div class="mb-3"><label class="form-label">Phone Number</label><input type="tel" name="phone" class="form-control" required></div>
        <div class="mb-3">
            <label class="form-label">Course Choice</label>
            <select class="form-select" name="course" required>
                <option value="">Select a Course</option>
                <option>Front-End Web Development</option>
                <option>Back-End Development</option>
                <option>Photoshop Design</option>
                <option>Digital Literacy</option>
            </select>
        </div>
        </div>
        <div class="modal-footer"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>
    </div>
</div>
