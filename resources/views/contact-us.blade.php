
<!DOCTYPE html>
<html lang="en">
<head>

@include('pages.meta')
</head>
<body class='' >

    <style>
        /* ===== FORM CARD ===== */
.fluentform_wrapper_1 {
    background: #ffffff;
    padding: 30px;
    border-radius: 14px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    max-width: 800px;
    margin: auto;
}

/* ===== LABELS ===== */
.fluentform_wrapper_1 label {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin-bottom: 6px;
    display: inline-block;
}

/* ===== INPUTS & TEXTAREA ===== */
.fluentform_wrapper_1 input,
.fluentform_wrapper_1 textarea {
    width: 100%;
    padding: 12px 14px;
    font-size: 14px;
    border-radius: 8px;
    border: 1px solid #ddd;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
}

/* ===== FOCUS STATE ===== */
.fluentform_wrapper_1 input:focus,
.fluentform_wrapper_1 textarea:focus {
    outline: none;
    border-color: #4f46e5;
    background-color: #fff;
    box-shadow: 0 0 0 3px rgba(79,70,229,0.15);
}

/* ===== TEXTAREA ===== */
.fluentform_wrapper_1 textarea {
    min-height: 120px;
    resize: vertical;
}

/* ===== COLUMN GAP ===== */
.ff-column-container {
    gap: 20px;
}

/* ===== SUBMIT BUTTON ===== */
.fluentform_wrapper_1 .ff-btn-submit {
    background: linear-gradient(135deg, #4f46e5, #6366f1);
    color: #fff;
    border: none;
    padding: 14px 36px;
    border-radius: 10px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

/* ===== BUTTON HOVER ===== */
.fluentform_wrapper_1 .ff-btn-submit:hover {
    background: linear-gradient(135deg, #4338ca, #4f46e5);
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(79,70,229,0.3);
}

/* ===== CENTER BUTTON ===== */
.ff_submit_btn_wrapper {
    text-align: center;
    margin-top: 25px;
}

/* ===== ERROR MESSAGE ===== */
.ff-el-error {
    color: #dc2626;
    font-size: 13px;
    margin-top: 5px;
}
.alert-wrapper {
    display: flex;
    justify-content: center;
    margin: 20px 0;
}

.alert-wrapper .alert {
    width: 100%;
    max-width: 600px;
    text-align: center;
    padding: 14px 20px;
    border-radius: 10px;
    font-weight: 500;

}

.alert-success {
    background: #ecfdf5;
    color: #065f46;
    border: 1px solid #a7f3d0;
}

.alert-danger {
    background: #fef2f2;
    color: #991b1b;
    border: 1px solid #fecaca;
}



/* ===== MOBILE RESPONSIVE ===== */
@media (max-width: 768px) {
    .ff-t-cell {
        flex-basis: 100% !important;
    }

    .fluentform_wrapper_1 {
        padding: 20px;
    }
}

    </style>

<div id="SITE_CONTAINER"><div id="main_MF" class="main_MF"><div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" role="region" tabindex="-1" aria-label="top of page">
    <span class="mHZSwn">top of page</span></div><div id="BACKGROUND_GROUP" class="backgroundGroup_dyrlq BACKGROUND_GROUP"><div id="BACKGROUND_GROUP_TRANSITION_GROUP">
        <div id="pageBackground_dyrlq" data-media-height-override-type="" data-media-position-override="false" class="pageBackground_dyrlq BmZ5pC">
            <div id="bgLayers_pageBackground_dyrlq" data-hook="bgLayers" data-motion-part="BG_LAYER pageBackground_dyrlq" class="MW5IWV"><div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
            <div id="bgMedia_pageBackground_dyrlq" data-motion-part="BG_MEDIA pageBackground_dyrlq" class="VgO9Yg"></div></div></div></div></div><div id="site-root" class="site-root"><div id="masterPage" class="mesh-layout masterPage css-editing-scope">

                @include('pages.header')
            <main id="PAGES_CONTAINER" class="PAGES_CONTAINER" tabindex="-1" data-main-content="true">
                <div id="SITE_PAGES" class="JsJXaX SITE_PAGES">
                    <div id="SITE_PAGES_TRANSITION_GROUP" class="AnQkDU">
                        <div id="dyrlq" class="fEm0Bo zK7MhX dyrlq">
                            <div class="c7cMWz wixui-page" data-testid="page-bg"></div>
                            <div class="FVGvCX">
                                <div id="Containerdyrlq" class="Containerdyrlq SPY_vo">
                                    <div data-mesh-id="ContainerdyrlqinlineContent" data-testid="inline-content" class="">
                                        <div
                                            data-mesh-id="ContainerdyrlqinlineContent-gridContainer"
                                            data-testid="mesh-container-content"
                                        >

                                      <div class="alert-wrapper">
                                        @if(session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        @if(session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                    </div>


                                          <div class="elementor-element elementor-element-576b0ee e-con-full ct-backdrop-l ct-border-animation ct-boxshadow ct-column-sticky e-flex e-con e-child"
                                            data-id="576b0ee"
                                            data-element_type="container"
                                            data-settings='{"background_background":"gradient"}'
                                        >
                                            <div
                                                class="elementor-element elementor-element-1e51db0 ct-contact-form fluentform-widget-submit-button-custom elementor-widget elementor-widget-fluent-form-widget"
                                                data-id="1e51db0"
                                                data-element_type="widget"
                                                data-widget_type="fluent-form-widget.default"
                                            >
                                                <div class="elementor-widget-container">
                                                    <div class="fluentform-widget-wrapper fluentform-widget-align-default">
                                                        <div class="fluentform ff-default fluentform_wrapper_1 ffs_default_wrap">
                                                            <form
                                                                data-form_id="1"
                                                                id="fluentform_1"
                                                                class="frm-fluent-form fluent_form_1 ff-el-form-top ff_form_instance_1_1 ffs_default ff-form-loaded"
                                                                data-form_instance="ff_form_instance_1_1"
                                                                method="POST"
                                                                action="{{ route('contact') }}"
                                                            >
                                                            @csrf
                                                                <fieldset
                                                                    style="
                                                                        border: none !important;
                                                                        margin: 0 !important;
                                                                        padding: 0 !important;
                                                                        background-color: transparent !important;
                                                                        box-shadow: none !important;
                                                                        outline: none !important;
                                                                        min-inline-size: 100%;
                                                                    "
                                                                >
                                                                    <legend
                                                                        class="ff_screen_reader_title"
                                                                        style="
                                                                            display: block;
                                                                            margin: 0 !important;
                                                                            padding: 0 !important;
                                                                            height: 0 !important;
                                                                            text-indent: -999999px;
                                                                            width: 0 !important;
                                                                            overflow: hidden;
                                                                        "
                                                                    >
                                                                        Contact Form Demo
                                                                    </legend>
                                                                    <input type="hidden" name="__fluent_form_embded_post_id" value="1191" /><input
                                                                        type="hidden"
                                                                        id="_fluentform_1_fluentformnonce"
                                                                        name="_fluentform_1_fluentformnonce"
                                                                        value="0afecc6769"
                                                                    /><input type="hidden" name="_wp_http_referer" value="/contact/" />
                                                                    <div data-name="ff_cn_id_1" class="ff-t-container ff-column-container ff_columns_total_2">
                                                                        <div class="ff-t-cell ff-t-column-1" style="flex-basis: 50%">
                                                                            <div
                                                                                data-type="name-element"
                                                                                data-name="names"
                                                                                class="ff-field_container ff-name-field-wrapper"
                                                                            >
                                                                                <div class="ff-t-container">
                                                                                    <div class="ff-t-cell">
                                                                                        <div class="ff-el-group">
                                                                                            <div class="ff-el-input--label asterisk-right">
                                                                                                <label
                                                                                                    for="ff_1_names_first_name_"
                                                                                                    id="label_ff_1_names_first_name_"
                                                                                                    >Your name</label
                                                                                                >
                                                                                            </div>
                                                                                            <div class="ff-el-input--content">
                                                                                                <input
                                                                                                    type="text"
                                                                                                    name="name"
                                                                                                    id="ff_1_names_first_name_"
                                                                                                    class="ff-el-form-control"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                />
                                                                                            </div>
                                                                                            @error('name')
                                                                                                <small class="text-danger" style="color:red;">{{ $message }}</small>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ff-t-cell ff-t-column-2" style="flex-basis: 50%">
                                                                            <div class="ff-el-group">
                                                                                <div class="ff-el-input--label ff-el-is-required asterisk-right">
                                                                                    <label for="ff_1_email" id="label_ff_1_email" aria-label="Your email"
                                                                                        >Your email</label
                                                                                    >
                                                                                </div>
                                                                                <div class="ff-el-input--content">
                                                                                    <input
                                                                                        type="email"
                                                                                        name="email"
                                                                                        id="ff_1_email"
                                                                                        class="ff-el-form-control"
                                                                                        data-name="email"
                                                                                        aria-invalid="false"
                                                                                        aria-required="true"
                                                                                    />
                                                                                </div>
                                                                                @error('email')
                                                                                    <small class="text-danger" style="color:red;">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-name="ff_cn_id_2" class="ff-t-container ff-column-container ff_columns_total_2">
                                                                        <div class="ff-t-cell ff-t-column-1" style="flex-basis: 50%">
                                                                            <div class="ff-el-group">
                                                                                <div class="ff-el-input--label ff-el-is-required asterisk-right">
                                                                                    <label for="ff_1_email_1" id="label_ff_1_email_1" aria-label="Company name"
                                                                                        >Company name</label
                                                                                    >
                                                                                </div>
                                                                                <div class="ff-el-input--content">
                                                                                    <input
                                                                                        type="email"
                                                                                        name="company_email"
                                                                                        id="ff_1_email_1"
                                                                                        class="ff-el-form-control"
                                                                                        data-name="email_1"
                                                                                        aria-invalid="false"
                                                                                        aria-required="true"
                                                                                    />
                                                                                </div>
                                                                                @error('company_email')
                                                                                    <small class="text-danger">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="ff-t-cell ff-t-column-2" style="flex-basis: 50%">
                                                                            <div class="ff-el-group">
                                                                                <div class="ff-el-input--label ff-el-is-required asterisk-right">
                                                                                    <label
                                                                                        for="ff_1_numeric_field"
                                                                                        id="label_ff_1_numeric_field"
                                                                                        aria-label="Phone number"
                                                                                        >Phone number</label
                                                                                    >
                                                                                </div>
                                                                                <div class="ff-el-input--content">
                                                                                    <input
                                                                                        type="number"
                                                                                        name="numeric_field"
                                                                                        id="ff_1_numeric_field"
                                                                                        class="ff-el-form-control"
                                                                                        data-name="numeric_field"
                                                                                        inputmode="numeric"
                                                                                        step="any"
                                                                                        aria-invalid="false"
                                                                                        aria-required="true"
                                                                                    />
                                                                                </div>
                                                                                @error('numeric_field')
                                                                                    <small class="text-danger" style="color:red;">{{ $message }}</small>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ff-el-group">
                                                                        <div class="ff-el-input--label asterisk-right">
                                                                            <label for="ff_1_message" id="label_ff_1_message" aria-label="Enquiry"
                                                                                >Enquiry</label
                                                                            >
                                                                        </div>
                                                                        <div class="ff-el-input--content">
                                                                            <textarea
                                                                                aria-required="false"
                                                                                aria-labelledby="label_ff_1_message"
                                                                                name="message"
                                                                                id="ff_1_message"
                                                                                class="ff-el-form-control"
                                                                                rows="4"
                                                                                cols="2"
                                                                                data-name="message"
                                                                            ></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ff-el-group ff-text-left ff_submit_btn_wrapper">
                                                                        <button
                                                                            type="submit"
                                                                            class="ff-btn ff-btn-submit ff-btn-md ff_btn_style"
                                                                            aria-label="Submit Form"
                                                                        >
                                                                            Submit Form
                                                                        </button>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                            <div
                                                                id="fluentform_1_errors"
                                                                class="ff-errors-in-stack ff_form_instance_1_1 ff-form-loading_errors ff_form_instance_1_1_errors"
                                                            ></div>
                                                        </div>
                                                        <script type="text/javascript">
                                                            window.fluent_form_ff_form_instance_1_1 = {
                                                                id: "1",
                                                                settings: {
                                                                    layout: {
                                                                        labelPlacement: "top",
                                                                        helpMessagePlacement: "with_label",
                                                                        errorMessagePlacement: "inline",
                                                                        cssClassName: "",
                                                                        asteriskPlacement: "asterisk-right",
                                                                    },
                                                                    restrictions: { denyEmptySubmission: { enabled: false } },
                                                                },
                                                                form_instance: "ff_form_instance_1_1",
                                                                form_id_selector: "fluentform_1",
                                                                rules: {
                                                                    "names[first_name]": {
                                                                        required: {
                                                                            value: false,
                                                                            message: "This field is required",
                                                                            global: false,
                                                                            global_message: "This field is required",
                                                                        },
                                                                    },
                                                                    "names[middle_name]": {
                                                                        required: {
                                                                            value: false,
                                                                            message: "This field is required",
                                                                            global: false,
                                                                            global_message: "This field is required",
                                                                        },
                                                                    },
                                                                    "names[last_name]": {
                                                                        required: {
                                                                            value: false,
                                                                            message: "This field is required",
                                                                            global: false,
                                                                            global_message: "This field is required",
                                                                        },
                                                                    },
                                                                    email: {
                                                                        required: {
                                                                            value: true,
                                                                            message: "This field is required",
                                                                            global: false,
                                                                            global_message: "This field is required",
                                                                        },
                                                                        email: {
                                                                            value: true,
                                                                            message: "This field must contain a valid email",
                                                                            global: false,
                                                                            global_message: "This field must contain a valid email",
                                                                        },
                                                                    },
                                                                    email_1: {
                                                                        required: {
                                                                            value: true,
                                                                            message: "This field is required",
                                                                            global: false,
                                                                            global_message: "This field is required",
                                                                        },
                                                                        email: {
                                                                            value: true,
                                                                            message: "This field must contain a valid email",
                                                                            global: false,
                                                                            global_message: "This field must contain a valid email",
                                                                        },
                                                                    },
                                                                    numeric_field: {
                                                                        required: {
                                                                            value: true,
                                                                            message: "This field is required",
                                                                            global_message: "This field is required",
                                                                            global: true,
                                                                        },
                                                                        numeric: {
                                                                            value: true,
                                                                            message: "This field must contain numeric value",
                                                                            global_message: "This field must contain numeric value",
                                                                            global: true,
                                                                        },
                                                                        min: {
                                                                            value: "",
                                                                            message: "Validation fails for minimum value",
                                                                            global_message: "Validation fails for minimum value",
                                                                            global: true,
                                                                        },
                                                                        max: {
                                                                            value: "",
                                                                            message: "Validation fails for maximum value",
                                                                            global_message: "Validation fails for maximum value",
                                                                            global: true,
                                                                        },
                                                                        digits: {
                                                                            value: "",
                                                                            message: "Validation fails for limited digits",
                                                                            global_message: "Validation fails for limited digits",
                                                                            global: true,
                                                                        },
                                                                    },
                                                                    message: {
                                                                        required: {
                                                                            value: false,
                                                                            message: "This field is required",
                                                                            global: false,
                                                                            global_message: "This field is required",
                                                                        },
                                                                    },
                                                                },
                                                                debounce_time: 300,
                                                            };
                                                        </script>
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
            </main>





</body>
</html>
