<div class="contact-form-area">
    <div class="section-heading">
        <h2>Make appointment</h2>
        <p>Fill out the form below to schedule appointment.</p>
    </div>
    <div class="contact-form">
        <form action="#" method="post" id="appointmentForm">
            <!-- Message Input Area Start -->
            <div class="contact_input_area">
                <div class="row">
                    <!-- Single Input Area -->
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        </div>
                    </div>
                    <!-- Single Input Area -->
                    <div class="col-12">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div> 
                    <div class="col-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Phone number" required>
                        </div>
                    </div> 
                    <!-- Single Input Area -->
                    <div class="col-12">
                        <div class="form-group">
                            <input type="date" class="form-control" name="date" id="date" placeholder="Choose Date" required>
                        </div>
                    </div>                                        
                    <!-- Single Input Area -->
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Additional note" ></textarea>
                        </div>
                    </div>
                    <!-- Single Input Area -->
                    <div class="col-8">
                        <button type="submit" id="makeApointment" class="btn fancy-btn fancy-dark bg-transparent">Schedule</button>
                        <div id="status"></div>
                    </div>                   
                </div>
                <div style="padding-top: 25px;" class="row">
                    <div class="col-md-12">
                        <div id="msg-stat" style="padding-top: 10px; padding-bottom: 10px;">
                            <img src="<?php echo base_url(); ?>assets/img/loading.gif" alt="" class="loading-gif" style="display: none;">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>