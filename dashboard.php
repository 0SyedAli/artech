<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>




<!-- numbered progress bar start -->
<section class="num-porg-bar">
    <div class="cotnainer">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div>
                    <ul>
                        <li>
                            <p>1</p>
                            <h6>Project Information</h6>
                        </li>
                        <li>
                            <p>2</p>
                            <h6>Schedule Quote Meeting</h6>
                        </li>
                        <li>
                            <p>3</p>
                            <h6>Review Quote</h6>
                        </li>
                        <li>
                            <p>4</p>
                            <h6>Start Project</h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- numbered progress bar end -->

<!-- choose service dashboard start -->
<section class="serv-dashboard-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="main-serv-dashboard">
                    <div class="serv-dashboard-box">
                        <div>
                            <div class="row">
                                <div class="col-12 col-lg-2">
                                    <img src="images/permit_icon.png" alt="" class="permit_icon">
                                </div>
                                <div class="col-12 col-lg-10">
                                    <div>
                                        <div class="d-flex align-items-center gap-3">
                                            <h2>Plans & Permitting</h2>
                                            <i class="far fa-trash-alt"></i>
                                        </div>
                                        <p>Our experienced design team will work with you to draft a plan for your
                                            renovation and obtain all permits from the city.</p>
                                        <a href="#">Learn about our permit process ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <h3>$4,799 - $14,399</h3>
                                <button type="button" class="tooltip-btn" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom"
                                    title="The starting price is an estimate based on the recent projects in your neighbourhood">
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseupper" aria-expanded="false"
                                        aria-controls="collapseupper">
                                        Project Scope Details
                                    </button>
                                </h2>
                                <div id="collapseupper" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h4>
                                            Included Services
                                        </h4>
                                        <ul>
                                            <li>
                                                Permit Management & City Comments
                                            </li>
                                            <li>
                                                Permit Design Service
                                            </li>
                                            <li>
                                                *Permit fee to the city & Printing Copy fee is not included
                                            </li>
                                            <li>
                                                **A 20% design & build bundle discount is already applied assuming the
                                                homeowners will sign the construction contract with Eano after permit is
                                                approved.
                                            </li>
                                        </ul>
                                        <div class="dash-agent">
                                            <img src="images/avatarXie.png" alt="">
                                            <p>"Hey! I’m Kristy from the Eano design team. Give us some more details
                                                about your project below, and they will be recorded in the contract"</p>
                                        </div>
                                        <h4>Additional Services</h4>
                                        <a href="#">Learn about potential additional costs ></a>
                                        <form action="">
                                            <textarea name="" id="" cols="" rows="1"
                                                placeholder="e.g. Demolish walls and floors. Click Enter to save."></textarea>
                                            <a href=""><i class="fal fa-plus"></i>add more</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion serv-dashboard-box" id="kitchen">
                        <div class="accordion-item">
                            <h2 class="accordion-header main" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#kitchenOne" aria-expanded="true" aria-controls="kitchenOne">
                                    <div>
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <h2>Kitchen</h2>
                                                        <i class="fas fa-edit"></i>
                                                        <i class="far fa-trash-alt"></i>
                                                    </div>
                                                    <a href="#">Learn about our permit process ></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h3>$4,799 - $14,399</h3>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="kitchenOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#kitchen">
                                <div class="accordion-body">
                                    <div class="accordion child" id="firstaccord">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFirst"
                                                    aria-expanded="false" aria-controls="collapseFirst">
                                                    Project Photos
                                                </button>
                                            </h2>
                                            <div id="collapseFirst" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#firstaccord">
                                                <div class="accordion-body">
                                                    <div class="img-upload-sec">
                                                        <input type="file">
                                                        <h6>+
                                                            Upload Photos
                                                        </h6>
                                                        <p>Let's sync the project more clearly</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion child" id="firstaccord">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Project Scope Details
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#firstaccord">
                                                <div class="accordion-body">
                                                    <h4>
                                                        Included Services
                                                    </h4>
                                                    <ul>
                                                        <li>
                                                            Permit Management & City Comments
                                                        </li>
                                                        <li>
                                                            Permit Design Service
                                                        </li>
                                                        <li>
                                                            *Permit fee to the city & Printing Copy fee is not included
                                                        </li>
                                                        <li>
                                                            **A 20% design & build bundle discount is already applied
                                                            assuming the
                                                            homeowners will sign the construction contract with Eano
                                                            after permit is
                                                            approved.
                                                        </li>
                                                    </ul>
                                                    <div class="dash-agent">
                                                        <img src="images/avatarXie.png" alt="">
                                                        <p>"Hey! I’m Kristy from the Eano design team. Give us some more
                                                            details
                                                            about your project below, and they will be recorded in the
                                                            contract"</p>
                                                    </div>
                                                    <h4>Additional Services</h4>
                                                    <a href="#">Learn about potential additional costs ></a>
                                                    <form action="">
                                                        <textarea name="" id="" cols="" rows="1"
                                                            placeholder="e.g. Demolish walls and floors. Click Enter to save."></textarea>
                                                        <a href=""><i class="fal fa-plus"></i>add more</a>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion child" id="firstaccord">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Finishing Material Bundles
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#firstaccord">
                                                <div class="accordion-body">
                                                    <div class="Finish-material">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-6">
                                                                <div class="Finish-img">
                                                                    <img src="images/dash1.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <div class="finish-des">
                                                                    <h3>
                                                                        Eano White/Nature Kitchen
                                                                    </h3>
                                                                    <table class="table table-borderless">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Size</td>
                                                                                <td>Layout</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>100 sqft.</td>
                                                                                <td>Linear</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">chage</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Confirm Selection</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="theme-btn" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#add-proj-modal">+ add another project</a>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="quote-sec">
                    <h4>Total Estimate</h4>
                    <h4>Starting at <span>$31,199</span></h4>
                    <hr>
                    <ul>
                        <li>
                            <h4>Permit</h4>
                            <h4>$4,799 - $14,399</h4>
                        </li>
                        <li>
                            <h4>Construction</h4>
                            <h4>Starting at $14,400</h4>
                        </li>
                        <li>
                            <h4>Materials</h4>
                            <h4>Estimated at $12,000</h4>
                        </li>
                    </ul>
                    <div class="proj-sum">
                        <h4>Your Project Summary:</h4>
                        <h4>Kitchen* 1</h4>
                    </div>
                    <a href="#" class="theme-btn" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#add-proj-modal">add another project</a>
                    <hr>
                    <h4>Select Date and Time</h4>
                    <div class="select-date" onclick="showDatePicker()">
                        <input type="date" id="datePicker" name="datemin" min="2000-01-02"
                            onchange="updateSelectedDate()">
                        <label id="selectedDateText"> </label>
                        <i class="fal fa-calendar-alt"></i>
                    </div>
                </div>
                <div class="quote-sec-box">
                    <h3>Next Step</h3>
                    <h2>Step3. Review Quote & Sign</h2>
                    <p>After your appointment, we'll provide a final quote.</p>
                    <p>This quote includes labor, rough materials, and debris removal. Finishing materials are not
                        included.</p>
                </div>
                <div class="quote-sec-box">
                    <h3>Project Resources</h3>
                    <p>Upload new or review existing documentation,
                        photos and videos related to your project here.</p>
                    <div class="upload-files" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#upload-files-modal">
                        <i class="fal fa-plus"></i>
                        <div>
                            <h6>
                                Upload Files
                            </h6>
                            <p>Photo/PDF/Video/Link</p>
                        </div>
                    </div>
                    <a class="upload-files pdf" href="blob:https://www.eano.com/7ce21535-a1a7-4f9a-9be9-8979f8f51a0f">
                        <i class="fas fa-file-pdf"></i>
                        <div>
                            <h6>
                                Eano_Material_List.pdf
                            </h6>
                            <p>Upload time: 11/17/2023</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- choose service dashboard end -->

<!-- Modal Add project start -->
<div class="modal modal-stepform fade" id="add-proj-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body ">
                <section class="step-form-sec">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-12">
                                <div>
                                    <div class="progress-bar">
                                        <div class="progress"></div>
                                    </div>
                                    <form action="">
                                        <img src="" alt="">
                                        <div class="step-form-div active_step">
                                            <h3>What’s the address of the property?</h3>
                                            <input type="text" placeholder="" class="form-control">
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>What type of service do you need?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">ADU</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Main-House-Extension" value="option2">
                                                <label class="form-check-label" for="Main-House-Extension">Main House
                                                    Extension</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Bathroom" value="option2">
                                                <label class="form-check-label" for="Bathroom">Bathroom</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Kitchen" value="option2">
                                                <label class="form-check-label" for="Kitchen">Kitchen</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Flooring" value="option2">
                                                <label class="form-check-label" for="Flooring">Flooring</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Painting" value="option2">
                                                <label class="form-check-label" for="Painting">Painting</label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>What’s the approximate sqft of the flooring area that needs work?</h3>
                                            <input type="text" placeholder="" class="form-control">
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Not sure</label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>Which of the following best describe your flooring remodeling needs?
                                            </h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">I’d like to refinish the
                                                    existing hardwood
                                                    flooring</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">I’d like to demolish the
                                                    existing flooring
                                                    and install new ones</label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>Would you like to add another project?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Add later</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">ADU</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Main-House-Extension" value="option2">
                                                <label class="form-check-label" for="Main-House-Extension">Main House
                                                    Extension</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Bathroom" value="option2">
                                                <label class="form-check-label" for="Bathroom">Bathroom</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Kitchen" value="option2">
                                                <label class="form-check-label" for="Kitchen">Kitchen</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Flooring" value="option2">
                                                <label class="form-check-label" for="Flooring">Flooring</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Painting" value="option2">
                                                <label class="form-check-label" for="Painting">Painting</label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>Which of the following best describes your needs?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Detached New
                                                    Construction</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Attached New
                                                    Construction</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Main-House-Extension" value="option2">
                                                <label class="form-check-label" for="Main-House-Extension">Detached
                                                    Garage
                                                    Conversion</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Bathroom" value="option2">
                                                <label class="form-check-label" for="Bathroom">Attached Garage
                                                    Conversion</label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>What is the approximate sqft of the space you’re planning to convert?
                                            </h3>
                                            <input type="text" placeholder="" class="form-control">
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>How many bathrooms are you thinking of adding in this ADU?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">0</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">1</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Main-House-Extension" value="option2">
                                                <label class="form-check-label" for="Main-House-Extension">2</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Bathroom" value="option2">
                                                <label class="form-check-label" for="Bathroom">3</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Bathroom" value="option2">
                                                <label class="form-check-label" for="Bathroom">4</label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>What’s the size of the kitchen in this ADU?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Small < (100sqft) </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Medium (100-150sqft)</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Main-House-Extension" value="option2">
                                                <label class="form-check-label" for="Main-House-Extension">Large >
                                                    (150sqft)</label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>What type of flooring would you like to put in this ADU?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Solid/engineered
                                                    hardwood</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Laminate/vinyl</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="Main-House-Extension" value="option2">
                                                <label class="form-check-label" for="Main-House-Extension">Not
                                                    sure/other
                                                    material</label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>Would you like Eano to handle the permit for you? We have a great team
                                                of
                                                experienced drafters.</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Yes, I’m interested in Eano’s
                                                    permit
                                                    service.</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">No, I’ll find my own
                                                    drafters.</label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>What is your timeline?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">As soon as possible</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">1-3 months
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">3-6 months
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">6+ months
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Just doing research
                                                </label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>What is your budget range?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Less than $7,000</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">$7,000 - $15,000
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">$15,000 - $30,000
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">$30,000 - $50,000
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">$50,000 - $100,000
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">$100,000 - $200,000
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">More than $200,000
                                                </label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>Do you have any previous renovation experience?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Yes</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">No
                                                </label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>What type of property is this?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Single family home</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Multi-Family Home
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Townhouse
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Townhouse with HOA
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Condo/apartment with HOA
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Condo/apartment
                                                </label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>What’s your goal for this project?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">For rental</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">For ourselves
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Preparing to sell property
                                                </label>
                                            </div>
                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>Do you have any photos of the property that you’d like to share with us?
                                                This is
                                                optional but will be very helpful for us to estimate your project
                                                accurately and
                                                discuss the project details with you.</h3>

                                            <a href="#" class="theme-btn step-next">next</a>
                                        </div>
                                        <div class="step-form-div">
                                            <h3>How did you find us?</h3>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Real estate agent</label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Friend's referral
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Wechat
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Facebook
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Google
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Houz/Homeadvisor
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Yelp
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Postcards
                                                </label>
                                            </div>
                                            <div class="form-check ">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="ADU" value="option1">
                                                <label class="form-check-label" for="ADU">Others
                                                </label>
                                            </div>
                                            <a href="#" class="theme-btn ">Submit</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add project end -->

<!-- upload files modal start -->
<!-- Modal -->
<div class="modal fade" id="upload-files-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <form action="">
                    <h3>Enter a Link</h3>
                    <div class="enter-link">
                        <input name="" id="" cols="" rows="1" placeholder="Paste the link URL and press enter to save"
                            style="height: 42px;" />
                        <a href=""><i class="fal fa-plus"></i>add more</a>
                    </div>
                    <div class="uploadfiles">
                        <input type="file">
                        <i class="fas fa-cloud-upload"></i>
                        <h3>Upload Images, Videos, and Documents</h3>
                        <p>(PNG, JPG, GIF, PDF, MP4, up to 50MB each)</p>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="theme-btn">
                            done
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- upload files modal end -->


<?php
include 'includes/footer.php';
$page = 'home';
?>