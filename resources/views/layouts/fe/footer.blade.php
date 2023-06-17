
    <footer id="footer" class="footer py-5 mt-5">
        <div class="copyright">
            <div class="row text-start mx-5 text-white align-items-center">
                <div class="col-md-6">
                    <h3>{{__('footer.contact_details')}}</h3>
                    <p>{!! \Setting::getSetting()->desc_web !!}</p>
                </div>
                <div class="col-md-3">
                    <h6>{{__('footer.telephone')}}</h6>
                    <p>{{ \Setting::getSetting()->phone }}</p>
                    <h6 class="mt-3">WhatsApp</h6>
                    <p>{{ \Setting::getSetting()->wa }}</p>
                </div>
                <div class="col-md-3">
                    <h6>{{__('footer.office')}}</h6>
                    <p>{{ \Setting::getSetting()->address }}</p>
                    <h6 class="mt-3">Email</h6>
                    <p>{{ \Setting::getSetting()->mail }}</p>
                </div>
            </div>
        <!-- &copy; Copyright <strong><span>Abdurrah GM Project</span></strong>. All Rights Reserved -->
        </div>
    </footer>
