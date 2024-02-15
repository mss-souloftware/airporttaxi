<h4 class="pb-30">Book Your Taxi Now!</h4>
<form class="form">
    <div class="from-group">
        <input class="form-control txt-field" type="text" name="name" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'">
        <input class="form-control txt-field" type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
        <input class="form-control txt-field" type="tel" name="phone" placeholder="Phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone number'">
    </div>
    <div class="form-group">
        <div class="default-select" id="default-select">
            <select>
                <option value disabled selected hidden>From Destination</option>
                <option value="1">Destination One</option>
                <option value="2">Destination Two</option>
                <option value="3">Destination Three</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="default-select" id="default-select2">
            <select>
                <option value disabled selected hidden>To Destination</option>
                <option value="1">Destination One</option>
                <option value="2">Destination Two</option>
                <option value="3">Destination Three</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group dates-wrap">
            <input id="datepicker2" class="dates form-control" placeholder="Date & time" type="text">
            <div class="input-group-prepend">
                <span class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-default btn-lg btn-block text-center text-uppercase">Quote Now!</button>
    </div>
</form>