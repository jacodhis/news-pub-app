
<!DOCTYPE html>
<html lang="en">
<head>

<title>About- Milestone Badge</title>
@include('pages.meta')

<style id="page-transitions">@view-transition {navigation: auto;types: OutIn}</style>
<style id="css_masterPage">@font-face {font-family: 'lulo-clean-w01-one-bold'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w05-one-bold.woff2') format('woff2'); unicode-range: U+0100-0107, U+010A-0113, U+0116-011B, U+011E-0123, U+0126-0130, U+0132-0137, U+0139-0148, U+014A-0151, U+0154-015F, U+0162-0175, U+0177, U+0179-017C, U+01FC-01FF, U+0218-0219, U+02C7, U+02D8-02DB, U+02DD, U+1E80-1E85, U+1E9E, U+1EF2-1EF3, U+2044, U+2070, U+2074-2079, U+2212, U+E001, U+E909, U+E910-E912, U+E999, U+F6C3, U+F6E0, U+F6E4, U+F8FF;font-display: swap;
}
@font-face {font-family: 'lulo-clean-w01-one-bold'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w01-one-bold.woff2') format('woff2'); unicode-range: U+0020-007E, U+00A0-00A3, U+00A5-00AB, U+00AE-00B4, U+00B6-00FF, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+02C6, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2122;font-display: swap;
}@font-face {font-family: 'din-next-w01-light'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w10-light.woff2') format('woff2'); unicode-range: U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0490-0491, U+2116;font-display: swap;
}
@font-face {font-family: 'din-next-w01-light'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w02-light.woff2') format('woff2'); unicode-range: U+000D, U+0100-010F, U+0111-0130, U+0132-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+01FA-01FF, U+0218-021B, U+0237, U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03C0, U+1E80-1E85, U+1EF2-1EF3, U+2070, U+2074-2079, U+2080-2089, U+2113, U+2126, U+212E, U+2153-2154, U+215B-215E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+F8FF, U+FB00-FB04;font-display: swap;
}
@font-face {font-family: 'din-next-w01-light'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/eca8b0cd-45d8-43cf-aee7-ca462bc5497c/v1/din-next-w01-light.woff2') format('woff2'); unicode-range: U+0020-007E, U+00A0-00FF, U+0110, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+02C6-02C7, U+02DA, U+02DC, U+03BC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;font-display: swap;
}@font-face {font-family: 'avenir-lt-w01_35-light1475496'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/af36905f-3c92-4ef9-b0c1-f91432f16ac1/v1/avenir-lt-w05_35-light.woff2') format('woff2'); unicode-range: U+0100-012B, U+012E-0130, U+0132-0137, U+0139-0149, U+014C-0151, U+0154-015F, U+0162-0177, U+0179-017C, U+0218-021B, U+02C9, U+02D8-02D9, U+02DB, U+02DD, U+0394, U+03A9, U+03BC, U+03C0, U+1E9E, U+20B9-20BA, U+20BC-20BD, U+2113, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+F8FF, U+FB01-FB02;font-display: swap;
}
@font-face {font-family: 'avenir-lt-w01_35-light1475496'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/af36905f-3c92-4ef9-b0c1-f91432f16ac1/v1/avenir-lt-w01_35-light1475496.woff2') format('woff2'); unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-00FF, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+0192, U+0237, U+02C6-02C7, U+02DA, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2122;font-display: swap;
}@font-face {font-family: 'barlow-medium'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E1tXRa8TVwTICgirnJhmVJw.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xqg5eI2G47JWe0-AuFtD150.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/yS165lxqGuDghyUMXeu6xVtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ6g5eI2G47JWe0-AuFtD150.woff2') format('woff2');font-display: swap;
}@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WohvToJdLm8BvE.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs0wH8DnzcjTrA.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s6Fostz0rdom9.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_A8s5ynghnQci.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WogvToJdLm8BvE.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs1wH8DnzcjTrA.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s6Vostz0rdom9.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_Ass5ynghnQci.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WouvToJdLm8.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs7wH8Dnzcj.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s51ostz0rdg.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_DMs5ynghnQ.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}#masterPage:not(.landingPage) #PAGES_CONTAINER{margin-top:0px;margin-bottom:0px;}#masterPage.landingPage #SITE_HEADER{display:none;}#masterPage.landingPage #CONTROLLER_COMP_CUSTOM_ID{display:none;}#masterPage.landingPage #SOSP_CONTAINER_CUSTOM_ID{display:none;}#masterPage.landingPage #SITE_FOOTER{display:none;}#masterPage.landingPage #SITE_HEADER-placeholder{display:none;}#masterPage.landingPage #SITE_FOOTER-placeholder{display:none;}#SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus, #SITE_CONTAINER.focus-ring-active :not(.has-custom-focus):not(.ignore-focus):not([tabindex="-1"]):focus ~ .wixSdkShowFocusOnSibling{--focus-ring-box-shadow:0 0 0 2px #116dff;box-shadow:var(--focus-ring-box-shadow) !important;z-index:1;}.has-inner-focus-ring{--focus-ring-box-shadow:0 0 0 2px #116dff !important;}#masterPage{left:0;margin-left:0;width:100%;min-width:0;}#SITE_HEADER{z-index:50;--above-all-in-container:10000;}#PAGES_CONTAINER{--pinned-layer-in-container:51;--above-all-in-container:49;}#CONTROLLER_COMP_CUSTOM_ID{--pinned-layer-in-container:52;--above-all-in-container:49;}#SOSP_CONTAINER_CUSTOM_ID{--pinned-layer-in-container:53;--above-all-in-container:49;}#SITE_FOOTER{--pinned-layer-in-container:54;--above-all-in-container:49;}[id="soapAfterPagesContainer"].page-without-sosp [data-mesh-id=soapAfterPagesContainerinlineContent]{height:auto;width:100%;position:static;min-height:auto;padding-bottom:0px;box-sizing:border-box;}[id="soapAfterPagesContainer"].page-without-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > [id="CONTROLLER_COMP_CUSTOM_ID"], [id="soapAfterPagesContainer"].page-without-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > interact-element > [id="CONTROLLER_COMP_CUSTOM_ID"]{position:absolute;top:15px;left:20px;margin-left:calc((100% - 980px) * 0.5);}[id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent]{height:auto;width:100%;}[id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;margin-top:-127px;grid-template-rows:1fr;grid-template-columns:100%;padding-bottom:0px;box-sizing:border-box;}[id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > [id="CONTROLLER_COMP_CUSTOM_ID"], [id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > interact-element > [id="CONTROLLER_COMP_CUSTOM_ID"]{position:absolute;top:15px;left:20px;margin-left:calc((100% - 980px) * 0.5);}[id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > [id="SOSP_CONTAINER_CUSTOM_ID"], [id="soapAfterPagesContainer"].page-with-sosp [data-mesh-id=soapAfterPagesContainerinlineContent-gridContainer] > interact-element > [id="SOSP_CONTAINER_CUSTOM_ID"]{position:relative;margin:124px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}:root,:host, .spxThemeOverride, .max-width-container, #root{--color_0:255,255,255;--color_1:255,255,255;--color_2:0,0,0;--color_3:237,28,36;--color_4:0,136,203;--color_5:255,203,5;--color_6:114,114,114;--color_7:176,176,176;--color_8:255,255,255;--color_9:114,114,114;--color_10:176,176,176;--color_11:255,255,255;--color_12:204,204,204;--color_13:160,160,159;--color_14:96,94,94;--color_15:0,0,0;--color_16:186,252,255;--color_17:87,187,191;--color_18:49,127,129;--color_19:41,101,105;--color_20:29,62,64;--color_21:184,235,200;--color_22:145,214,167;--color_23:68,194,109;--color_24:45,129,73;--color_25:23,65,36;--color_26:244,192,175;--color_27:233,159,134;--color_28:222,80,33;--color_29:148,54,22;--color_30:74,27,11;--color_31:244,234,177;--color_32:233,219,137;--color_33:222,195,40;--color_34:148,130,27;--color_35:74,65,13;--color_36:255,255,255;--color_37:0,0,0;--color_38:204,204,204;--color_39:160,160,159;--color_40:96,94,94;--color_41:49,127,129;--color_42:186,252,255;--color_43:87,187,191;--color_44:255,255,255;--color_45:0,0,0;--color_46:0,0,0;--color_47:96,94,94;--color_48:49,127,129;--color_49:49,127,129;--color_50:255,255,255;--color_51:255,255,255;--color_52:49,127,129;--color_53:49,127,129;--color_54:160,160,159;--color_55:160,160,159;--color_56:255,255,255;--color_57:255,255,255;--color_58:49,127,129;--color_59:49,127,129;--color_60:49,127,129;--color_61:49,127,129;--color_62:255,255,255;--color_63:255,255,255;--color_64:160,160,159;--color_65:160,160,159;--font_0:normal normal normal 110px/1.4em lulo-clean-w01-one-bold,sans-serif;--font_1:normal normal normal 16px/1.4em din-next-w01-light,sans-serif;--font_2:normal normal normal 42px/1.4em lulo-clean-w01-one-bold,sans-serif;--font_3:normal normal normal 35px/1.4em lulo-clean-w01-one-bold,sans-serif;--font_4:normal normal normal 23px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_5:normal normal normal 20px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_6:normal normal normal 17px/1.4em lulo-clean-w01-one-bold,sans-serif;--font_7:normal normal normal 17px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_8:normal normal normal 15px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_9:normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,sans-serif;--font_10:normal normal normal 12px/1.4em din-next-w01-light,sans-serif;--wix-ads-height:0px;--sticky-offset:0px;--wix-ads-top-height:0px;--site-width:980px;--above-all-z-index:100000;--portals-z-index:100001;--wix-opt-in-direction:ltr;--wix-opt-in-direction-multiplier:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;--minViewportSize:320;--maxViewportSize:1920;--theme-spx-ratio:1px;--full-viewport:100 * var(--one-unit) * var(--browser-zoom);--scaling-factor:clamp(var(--spx-stopper-min), var(--full-viewport), min(var(--spx-stopper-max), var(--section-max-width)));--customScaleViewportLimit:clamp(var(--minViewportSize) * 1px, var(--full-viewport), min(var(--section-max-width), var(--maxViewportSize) * 1px));}.font_0{font:var(--font_0);color:rgb(var(--color_45));letter-spacing:0em;}.font_1{font:var(--font_1);color:rgb(var(--color_14));letter-spacing:0em;}.font_2{font:var(--font_2);color:rgb(var(--color_45));letter-spacing:0em;}.font_3{font:var(--font_3);color:rgb(var(--color_45));letter-spacing:0em;}.font_4{font:var(--font_4);color:rgb(var(--color_45));letter-spacing:0em;}.font_5{font:var(--font_5);color:rgb(var(--color_45));letter-spacing:0em;}.font_6{font:var(--font_6);color:rgb(var(--color_45));letter-spacing:0em;}.font_7{font:var(--font_7);color:rgb(var(--color_15));letter-spacing:0em;}.font_8{font:var(--font_8);color:rgb(var(--color_15));letter-spacing:0em;}.font_9{font:var(--font_9);color:rgb(var(--color_15));letter-spacing:0em;}.font_10{font:var(--font_10);color:rgb(var(--color_14));letter-spacing:0em;}.color_0{color:rgb(var(--color_0));}.color_1{color:rgb(var(--color_1));}.color_2{color:rgb(var(--color_2));}.color_3{color:rgb(var(--color_3));}.color_4{color:rgb(var(--color_4));}.color_5{color:rgb(var(--color_5));}.color_6{color:rgb(var(--color_6));}.color_7{color:rgb(var(--color_7));}.color_8{color:rgb(var(--color_8));}.color_9{color:rgb(var(--color_9));}.color_10{color:rgb(var(--color_10));}.color_11{color:rgb(var(--color_11));}.color_12{color:rgb(var(--color_12));}.color_13{color:rgb(var(--color_13));}.color_14{color:rgb(var(--color_14));}.color_15{color:rgb(var(--color_15));}.color_16{color:rgb(var(--color_16));}.color_17{color:rgb(var(--color_17));}.color_18{color:rgb(var(--color_18));}.color_19{color:rgb(var(--color_19));}.color_20{color:rgb(var(--color_20));}.color_21{color:rgb(var(--color_21));}.color_22{color:rgb(var(--color_22));}.color_23{color:rgb(var(--color_23));}.color_24{color:rgb(var(--color_24));}.color_25{color:rgb(var(--color_25));}.color_26{color:rgb(var(--color_26));}.color_27{color:rgb(var(--color_27));}.color_28{color:rgb(var(--color_28));}.color_29{color:rgb(var(--color_29));}.color_30{color:rgb(var(--color_30));}.color_31{color:rgb(var(--color_31));}.color_32{color:rgb(var(--color_32));}.color_33{color:rgb(var(--color_33));}.color_34{color:rgb(var(--color_34));}.color_35{color:rgb(var(--color_35));}.color_36{color:rgb(var(--color_36));}.color_37{color:rgb(var(--color_37));}.color_38{color:rgb(var(--color_38));}.color_39{color:rgb(var(--color_39));}.color_40{color:rgb(var(--color_40));}.color_41{color:rgb(var(--color_41));}.color_42{color:rgb(var(--color_42));}.color_43{color:rgb(var(--color_43));}.color_44{color:rgb(var(--color_44));}.color_45{color:rgb(var(--color_45));}.color_46{color:rgb(var(--color_46));}.color_47{color:rgb(var(--color_47));}.color_48{color:rgb(var(--color_48));}.color_49{color:rgb(var(--color_49));}.color_50{color:rgb(var(--color_50));}.color_51{color:rgb(var(--color_51));}.color_52{color:rgb(var(--color_52));}.color_53{color:rgb(var(--color_53));}.color_54{color:rgb(var(--color_54));}.color_55{color:rgb(var(--color_55));}.color_56{color:rgb(var(--color_56));}.color_57{color:rgb(var(--color_57));}.color_58{color:rgb(var(--color_58));}.color_59{color:rgb(var(--color_59));}.color_60{color:rgb(var(--color_60));}.color_61{color:rgb(var(--color_61));}.color_62{color:rgb(var(--color_62));}.color_63{color:rgb(var(--color_63));}.color_64{color:rgb(var(--color_64));}.color_65{color:rgb(var(--color_65));}.backcolor_0{background-color:rgb(var(--color_0));}.backcolor_1{background-color:rgb(var(--color_1));}.backcolor_2{background-color:rgb(var(--color_2));}.backcolor_3{background-color:rgb(var(--color_3));}.backcolor_4{background-color:rgb(var(--color_4));}.backcolor_5{background-color:rgb(var(--color_5));}.backcolor_6{background-color:rgb(var(--color_6));}.backcolor_7{background-color:rgb(var(--color_7));}.backcolor_8{background-color:rgb(var(--color_8));}.backcolor_9{background-color:rgb(var(--color_9));}.backcolor_10{background-color:rgb(var(--color_10));}.backcolor_11{background-color:rgb(var(--color_11));}.backcolor_12{background-color:rgb(var(--color_12));}.backcolor_13{background-color:rgb(var(--color_13));}.backcolor_14{background-color:rgb(var(--color_14));}.backcolor_15{background-color:rgb(var(--color_15));}.backcolor_16{background-color:rgb(var(--color_16));}.backcolor_17{background-color:rgb(var(--color_17));}.backcolor_18{background-color:rgb(var(--color_18));}.backcolor_19{background-color:rgb(var(--color_19));}.backcolor_20{background-color:rgb(var(--color_20));}.backcolor_21{background-color:rgb(var(--color_21));}.backcolor_22{background-color:rgb(var(--color_22));}.backcolor_23{background-color:rgb(var(--color_23));}.backcolor_24{background-color:rgb(var(--color_24));}.backcolor_25{background-color:rgb(var(--color_25));}.backcolor_26{background-color:rgb(var(--color_26));}.backcolor_27{background-color:rgb(var(--color_27));}.backcolor_28{background-color:rgb(var(--color_28));}.backcolor_29{background-color:rgb(var(--color_29));}.backcolor_30{background-color:rgb(var(--color_30));}.backcolor_31{background-color:rgb(var(--color_31));}.backcolor_32{background-color:rgb(var(--color_32));}.backcolor_33{background-color:rgb(var(--color_33));}.backcolor_34{background-color:rgb(var(--color_34));}.backcolor_35{background-color:rgb(var(--color_35));}.backcolor_36{background-color:rgb(var(--color_36));}.backcolor_37{background-color:rgb(var(--color_37));}.backcolor_38{background-color:rgb(var(--color_38));}.backcolor_39{background-color:rgb(var(--color_39));}.backcolor_40{background-color:rgb(var(--color_40));}.backcolor_41{background-color:rgb(var(--color_41));}.backcolor_42{background-color:rgb(var(--color_42));}.backcolor_43{background-color:rgb(var(--color_43));}.backcolor_44{background-color:rgb(var(--color_44));}.backcolor_45{background-color:rgb(var(--color_45));}.backcolor_46{background-color:rgb(var(--color_46));}.backcolor_47{background-color:rgb(var(--color_47));}.backcolor_48{background-color:rgb(var(--color_48));}.backcolor_49{background-color:rgb(var(--color_49));}.backcolor_50{background-color:rgb(var(--color_50));}.backcolor_51{background-color:rgb(var(--color_51));}.backcolor_52{background-color:rgb(var(--color_52));}.backcolor_53{background-color:rgb(var(--color_53));}.backcolor_54{background-color:rgb(var(--color_54));}.backcolor_55{background-color:rgb(var(--color_55));}.backcolor_56{background-color:rgb(var(--color_56));}.backcolor_57{background-color:rgb(var(--color_57));}.backcolor_58{background-color:rgb(var(--color_58));}.backcolor_59{background-color:rgb(var(--color_59));}.backcolor_60{background-color:rgb(var(--color_60));}.backcolor_61{background-color:rgb(var(--color_61));}.backcolor_62{background-color:rgb(var(--color_62));}.backcolor_63{background-color:rgb(var(--color_63));}.backcolor_64{background-color:rgb(var(--color_64));}.backcolor_65{background-color:rgb(var(--color_65));}#masterPage:not(.landingPage){--top-offset:var(--header-height);--header-height:127px;}#masterPage.landingPage{--top-offset:0px;}#SITE_HEADER{--bg:var(--color_11);--shd:none;--brwt:0px;--brd:var(--color_37);--brwb:0px;--bgctr:var(--color_11);--rd:0px;--alpha-bgctr:1;--alpha-brd:1;--alpha-bg:1;--backdrop-blur:0px;--boxShadowToggleOn-shd:none;--backdrop-filter:none;}#SITE_HEADER{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=SITE_HEADERinlineContent]{height:auto;width:100%;display:flex;}[data-mesh-id=SITE_HEADERinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;margin-bottom:-11px;grid-template-rows:repeat(2, min-content) 1fr;grid-template-columns:100%;}[data-mesh-id=SITE_HEADERinlineContent-gridContainer] > [id="comp-l0b7kk91"], [data-mesh-id=SITE_HEADERinlineContent-gridContainer] > interact-element > [id="comp-l0b7kk91"]{position:relative;margin:18px 0px 0 calc((100% - 980px) * 0.5);left:630px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=SITE_HEADERinlineContent-gridContainer] > [id="comp-irys4v5c"], [data-mesh-id=SITE_HEADERinlineContent-gridContainer] > interact-element > [id="comp-irys4v5c"]{position:relative;margin:0px 0px 0px calc((100% - 980px) * 0.5);left:398px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=SITE_HEADERinlineContent-gridContainer] > [id="comp-l09ic7mg"], [data-mesh-id=SITE_HEADERinlineContent-gridContainer] > interact-element > [id="comp-l09ic7mg"]{position:relative;margin:0px 0px -39px calc((100% - 980px) * 0.5);left:0px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}#SITE_HEADER{--bg-overlay-color:rgb(var(--color_36));--bg-gradient:none;--shc-mutated-brightness:128,128,128;position:sticky !important;top:var(--wix-ads-height);}#comp-l0b7kk91{width:332px;height:28px;}#comp-l0b7kk91{--item-size:28px;--item-margin-block:0;--item-margin-inline:0px 10px;--item-display:inline-block;--direction:var(--wix-opt-in-direction, ltr);width:332px;height:28px;}#comp-irys4v5c{--menuTotalBordersX:0px;--menuTotalBordersY:0px;--bgDrop:var(--color_11);--rd:0px;--shd:none;--fnt:normal normal 700 20px/1.4em barlow-medium,barlow,sans-serif;--pad:5px;--txt:249,171,67;--trans:color 0.4s ease 0s;--txth:var(--color_39);--txts:249,171,67;--alpha-bgDrop:1;--alpha-txt:1;--alpha-txth:1;--alpha-txts:1;--boxShadowToggleOn-shd:none;}#comp-irys4v5c{width:580px;height:50px;}#comp-irys4v5c{--menuTotalBordersY:0px;--menuTotalBordersX:0px;--submenus-direction:inherit;--menu-direction:inherit;--align:center;--menu-align:inherit;--submenus-align:inherit;}#comp-l09ic7mg{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09ic7mg{width:520px;height:81px;}#comp-l09ic7mg{--height:81px;--width:520px;}#PAGES_CONTAINER{left:0;margin-left:0;width:100%;min-width:0;}#SITE_PAGES{left:0;margin-left:0;width:100%;min-width:0;}#SITE_PAGES{--transition-duration:700ms;}#CONTROLLER_COMP_CUSTOM_ID{--alpha-bg:1;--bg:61,155,233;--bgh:43,104,156;--brd:43,104,156;--brdh:61,155,233;--brw:0px;--fnt:normal normal normal 14px/1.4em raleway;--rd:20px;--txt:255,255,255;--txth:255,255,255;--alpha-bgh:1;--alpha-brd:1;--alpha-brdh:1;--alpha-txt:1;--alpha-txth:1;--boxShadowToggleOn-shd:none;--shd:0 1px 4px rgba(0, 0, 0, 0.6);}#SOSP_CONTAINER_CUSTOM_ID{--brw:0px;--brd:var(--color_15);--bg:var(--color_11);--rd:0px;--shd:none;--gradient:none;--alpha-bg:1;--alpha-brd:1;--boxShadowToggleOn-shd:none;--bg-gradient:none;}#SOSP_CONTAINER_CUSTOM_ID{width:980px;}[data-mode=hover] #SOSP_CONTAINER_CUSTOM_ID{width:980px;}[data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent]{height:auto;width:980px;}[data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:min-content 1fr;grid-template-columns:100%;}[data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer] > [id="comp-jzjvdnbj"], [data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer] > interact-element > [id="comp-jzjvdnbj"]{position:relative;margin:0px 0px 0 0;left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer] > [id="comp-kogrxdne"], [data-mesh-id=SOSP_CONTAINER_CUSTOM_IDinlineContent-gridContainer] > interact-element > [id="comp-kogrxdne"]{position:relative;margin:0px 0px 0px 0;left:12px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}#SOSP_CONTAINER_CUSTOM_ID{--shc-mutated-brightness:128,128,128;}#comp-jzjvdnbj{width:980px;height:250px;}#comp-kogrxdne{--menuTotalBordersX:0px;--menuTotalBordersY:0px;--bgDrop:var(--color_11);--rd:0px;--shd:none;--fnt:var(--font_8);--pad:5px;--txt:var(--color_15);--trans:color 0.4s ease 0s;--txth:var(--color_18);--txts:var(--color_18);--alpha-bgDrop:1;--alpha-txt:1;--alpha-txth:1;--alpha-txts:1;--boxShadowToggleOn-shd:none;}#comp-kogrxdne{width:968px;height:40px;}#comp-kogrxdne{--menuTotalBordersY:0px;--menuTotalBordersX:0px;--submenus-direction:inherit;--menu-direction:inherit;--align:start;--menu-align:inherit;--submenus-align:inherit;}#SITE_FOOTER{--bg:var(--color_11);--shd:0 0 5px rgba(0, 0, 0, 0.7);--brwt:0px;--brd:47,46,46;--brwb:0px;--bgctr:var(--color_11);--rd:0px;--alpha-bgctr:0;--alpha-brd:1;--alpha-bg:0.6;--backdrop-blur:0px;--backdrop-filter:none;}#SITE_FOOTER{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=SITE_FOOTERinlineContent]{height:auto;width:100%;position:static;min-height:6px;}#SITE_FOOTER{--shc-mutated-brightness:128,128,128;--bg-overlay-color:transparent;--bg-gradient:none;}</style>
<style id="css_zwmhs">@font-face {font-family: 'barlow-medium'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E1tXRa8TVwTICgirnJhmVJw.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xqg5eI2G47JWe0-AuFtD150.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/yS165lxqGuDghyUMXeu6xVtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');font-display: swap;
}
@font-face {font-family: 'barlow-medium'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ6g5eI2G47JWe0-AuFtD150.woff2') format('woff2');font-display: swap;
}@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WohvToJdLm8BvE.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs0wH8DnzcjTrA.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s6Fostz0rdom9.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_A8s5ynghnQci.woff2') format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WogvToJdLm8BvE.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs1wH8DnzcjTrA.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s6Vostz0rdom9.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_Ass5ynghnQci.woff2') format('woff2'); unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHsv4kjgoGqM7E_CfOA5WouvToJdLm8.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: italic; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHrv4kjgoGqM7E_Cfs7wH8Dnzcj.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 700; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHqv4kjgoGqM7E3t-4s51ostz0rdg.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}
@font-face {font-family: 'barlow'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/tag-bundler/api/v1/fonts-cache/googlefont/woff2/s/barlow/v12/7cHpv4kjgoGqM7E_DMs5ynghnQ.woff2') format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;font-display: swap;
}@font-face {font-family: 'lulo-clean-w01-one-bold'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w05-one-bold.woff2') format('woff2'); unicode-range: U+0100-0107, U+010A-0113, U+0116-011B, U+011E-0123, U+0126-0130, U+0132-0137, U+0139-0148, U+014A-0151, U+0154-015F, U+0162-0175, U+0177, U+0179-017C, U+01FC-01FF, U+0218-0219, U+02C7, U+02D8-02DB, U+02DD, U+1E80-1E85, U+1E9E, U+1EF2-1EF3, U+2044, U+2070, U+2074-2079, U+2212, U+E001, U+E909, U+E910-E912, U+E999, U+F6C3, U+F6E0, U+F6E4, U+F8FF;font-display: swap;
}
@font-face {font-family: 'lulo-clean-w01-one-bold'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/e3cf8f7e-35c4-446f-9b93-de93e989f66f/v1/lulo-clean-w01-one-bold.woff2') format('woff2'); unicode-range: U+0020-007E, U+00A0-00A3, U+00A5-00AB, U+00AE-00B4, U+00B6-00FF, U+0131, U+0152-0153, U+0160-0161, U+0178, U+017D-017E, U+02C6, U+02DC, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2122;font-display: swap;
}@font-face {font-family: 'helvetica-w01-roman'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-lt-w10-roman.woff2') format('woff2'); unicode-range: U+0000, U+000D, U+0020-007E, U+00A0, U+00A4, U+00A6-00A7, U+00A9, U+00AB-00AE, U+00B0-00B1, U+00B5-00B7, U+00BB, U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0490-0491, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+20AC, U+2116, U+2122;font-display: swap;
}
@font-face {font-family: 'helvetica-w01-roman'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w02-roman.woff2') format('woff2'); unicode-range: U+000D, U+0020-007E, U+00A0-012B, U+012E-0137, U+0139-0149, U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7, U+02C9, U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+2113, U+2122, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+E301-E304, U+E306-E30D, U+FB01-FB02;font-display: swap;
}
@font-face {font-family: 'helvetica-w01-roman'; font-style: normal; font-weight: 400; src: url('//static.parastorage.com/fonts/v2/2af1bf48-e783-4da8-9fa0-599dde29f2d5/v1/helvetica-w01-roman.woff2') format('woff2'); unicode-range: U+0000, U+000D, U+0020-007E, U+00A0-012B, U+012E-0137, U+0139-0149, U+014C-017E, U+0192, U+0218-021B, U+0237, U+02C6-02C7, U+02C9, U+02D8-02DD, U+0394, U+03A9, U+03BC, U+03C0, U+0401-040C, U+040E-044F, U+0451-045C, U+045E-045F, U+0462-0463, U+0472-0475, U+0490-0491, U+04D9, U+1E9E, U+2013-2014, U+2018-201A, U+201C-201E, U+2020-2022, U+2026, U+2030, U+2039-203A, U+2044, U+20AC, U+20B9-20BA, U+20BC-20BD, U+2113, U+2116, U+2122, U+2126, U+212E, U+2202, U+2206, U+220F, U+2211-2212, U+2215, U+2219-221A, U+221E, U+222B, U+2248, U+2260, U+2264-2265, U+25CA, U+E300-E30D, U+F6C5, U+F6C9-F6D8, U+F8FF, U+FB01-FB02;font-display: swap;
}#zwmhs{left:0;margin-left:0;width:100%;min-width:0;}#masterPage{--pinned-layers-in-page:0;}[data-mesh-id=ContainerzwmhsinlineContent]{height:auto;width:100%;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:40px;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%;padding-bottom:0px;box-sizing:border-box;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > [id="comp-l09mhc2y"], [data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > interact-element > [id="comp-l09mhc2y"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > [id="comp-l09mhc5h"], [data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > interact-element > [id="comp-l09mhc5h"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > [id="comp-lp7zp3wk"], [data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > interact-element > [id="comp-lp7zp3wk"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > [id="comp-l09mhca11"], [data-mesh-id=ContainerzwmhsinlineContent-gridContainer] > interact-element > [id="comp-l09mhca11"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:0px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}#comp-l09mhc2y{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=comp-l09mhc2yinlineContent]{height:auto;width:100%;display:flex;}[data-mesh-id=comp-l09mhc2yinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;margin-bottom:-7px;grid-template-rows:min-content 1fr;grid-template-columns:100%;}[data-mesh-id=comp-l09mhc2yinlineContent-gridContainer] > [id="comp-l09mlcj0"], [data-mesh-id=comp-l09mhc2yinlineContent-gridContainer] > interact-element > [id="comp-l09mlcj0"]{position:relative;margin:0px 0px 15px calc((100% - 980px) * 0.5);left:180px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc2yinlineContent-gridContainer] > [id="comp-l09mhc3x"], [data-mesh-id=comp-l09mhc2yinlineContent-gridContainer] > interact-element > [id="comp-l09mhc3x"]{position:relative;margin:0px 0px 0px calc((100% - 980px) * 0.5);left:0px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}#comp-l09mlcj0{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09mlcj0{width:600px;height:257px;}#comp-l09mhc3x{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-l09mhc3x{width:980px;height:auto;}#comp-l09mhc5h{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=comp-l09mhc5hinlineContent]{height:auto;width:100%;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > [id="comp-l09mhc6a"], [data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > interact-element > [id="comp-l09mhc6a"]{position:relative;margin:22px 0px 0px calc((100% - 980px) * 0.5);left:172px;grid-area:1 / 1 / 5 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > [id="comp-l84duifh"], [data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > interact-element > [id="comp-l84duifh"]{position:relative;margin:0px 0px 19px calc((100% - 980px) * 0.5);left:285px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > [id="comp-la11a371"], [data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > interact-element > [id="comp-la11a371"]{position:relative;margin:100px 0px 10px calc((100% - 980px) * 0.5);left:372px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > [id="comp-mj6yzcsa"], [data-mesh-id=comp-l09mhc5hinlineContent-gridContainer] > interact-element > [id="comp-mj6yzcsa"]{position:relative;margin:0px 0px 19px calc((100% - 980px) * 0.5);left:513px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhc5hinlineContent-wedge-3]{visibility:hidden;height:465px;width:0;grid-area:1 / 1 / 3 / 2;}#comp-l09mhc6a{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-l09mhc6a{width:635px;height:auto;}#comp-l84duifh{width:169px;height:45px;}#comp-la11a371{width:236px;height:45px;}#comp-mj6yzcsa{width:169px;height:45px;}#comp-lp7zp3wk{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=comp-lp7zp3wkinlineContent]{height:auto;width:100%;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(9, min-content) 1fr;grid-template-columns:100%;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp803ax7"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp803ax7"]{position:relative;margin:17px 0px 24px calc((100% - 980px) * 0.5);left:338px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp7zxqiz"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp7zxqiz"]{position:relative;margin:0px 0px 5px calc((100% - 980px) * 0.5);left:49px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp8069en"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp8069en"]{position:relative;margin:0px 0px 62px calc((100% - 980px) * 0.5);left:54px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp807zjc"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp807zjc"]{position:relative;margin:6px 0px 0 calc((100% - 980px) * 0.5);left:49px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp8094jr"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp8094jr"]{position:relative;margin:0px 0px 50px calc((100% - 980px) * 0.5);left:54px;grid-area:5 / 1 / 6 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80frpc"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80frpc"]{position:relative;margin:21px 0px 6px calc((100% - 980px) * 0.5);left:40px;grid-area:6 / 1 / 7 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80h07q"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80h07q"]{position:relative;margin:0px 0px 8px calc((100% - 980px) * 0.5);left:45px;grid-area:7 / 1 / 8 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80srr7"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80srr7"]{position:relative;margin:279px 0px -6px calc((100% - 980px) * 0.5);left:45px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92tmqzu"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92tmqzu"]{position:relative;margin:7px 0px -6px calc((100% - 980px) * 0.5);left:6px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-ma2ikgvf"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-ma2ikgvf"]{position:relative;margin:0px 0px -28px calc((100% - 980px) * 0.5);left:7px;grid-area:9 / 1 / 10 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-ma2ilaba"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-ma2ilaba"]{position:relative;margin:0px 0px 11px calc((100% - 980px) * 0.5);left:36px;grid-area:10 / 1 / 11 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp801byr"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp801byr"]{position:relative;margin:5px 0px 0 calc((100% - 980px) * 0.5);left:371px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp806rq1"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp806rq1"]{position:relative;margin:0px 0px 62px calc((100% - 980px) * 0.5);left:376px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80a2wb"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80a2wb"]{position:relative;margin:0px 0px 0 calc((100% - 980px) * 0.5);left:372px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80btvc"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80btvc"]{position:relative;margin:0px 0px 50px calc((100% - 980px) * 0.5);left:376px;grid-area:5 / 1 / 6 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80hv5x"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80hv5x"]{position:relative;margin:24px 0px 9px calc((100% - 980px) * 0.5);left:359px;grid-area:6 / 1 / 7 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80ilml"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80ilml"]{position:relative;margin:0px 0px 8px calc((100% - 980px) * 0.5);left:376px;grid-area:7 / 1 / 8 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92t9x5r"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92t9x5r"]{position:relative;margin:7px 0px -6px calc((100% - 980px) * 0.5);left:343px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92tbel6"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92tbel6"]{position:relative;margin:279px 0px -6px calc((100% - 980px) * 0.5);left:376px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80qvd4"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80qvd4"]{position:relative;margin:6px 0px 14px calc((100% - 980px) * 0.5);left:372px;grid-area:9 / 1 / 10 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp8022xa"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp8022xa"]{position:relative;margin:0px 0px 5px calc((100% - 980px) * 0.5);left:682px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp8076fb"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp8076fb"]{position:relative;margin:0px 0px 62px calc((100% - 980px) * 0.5);left:687px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80d98y"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80d98y"]{position:relative;margin:6px 0px 0 calc((100% - 980px) * 0.5);left:690px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80e2ng"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80e2ng"]{position:relative;margin:0px 0px 50px calc((100% - 980px) * 0.5);left:695px;grid-area:5 / 1 / 6 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80ocab"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80ocab"]{position:relative;margin:0px 0px -15px calc((100% - 980px) * 0.5);left:669px;grid-area:6 / 1 / 7 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-lp80p5to"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-lp80p5to"]{position:relative;margin:0px 0px 8px calc((100% - 980px) * 0.5);left:695px;grid-area:7 / 1 / 8 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92tdpit"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92tdpit"]{position:relative;margin:0px 0px -13px calc((100% - 980px) * 0.5);left:653px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92texrx"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92texrx"]{position:relative;margin:279px 0px -6px calc((100% - 980px) * 0.5);left:701px;grid-area:8 / 1 / 9 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > [id="comp-m92topky"], [data-mesh-id=comp-lp7zp3wkinlineContent-gridContainer] > interact-element > [id="comp-m92topky"]{position:relative;margin:0px 0px 11px calc((100% - 980px) * 0.5);left:378px;grid-area:10 / 1 / 11 / 2;justify-self:start;align-self:start;}#comp-lp803ax7{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp803ax7{width:304px;height:auto;}#comp-lp7zxqiz{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp7zxqiz{width:236px;height:236px;}#comp-lp8069en{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp8069en{width:227px;height:auto;}#comp-lp807zjc{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp807zjc{width:227px;height:230px;}#comp-lp8094jr{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp8094jr{width:227px;height:auto;}#comp-lp80frpc{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80frpc{width:236px;height:236px;}#comp-lp80h07q{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80h07q{width:227px;height:auto;}#comp-lp80srr7{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80srr7{width:227px;height:auto;}#comp-m92tmqzu{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-m92tmqzu{width:302px;height:317px;}#comp-ma2ikgvf{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-ma2ikgvf{width:302px;height:299px;}#comp-ma2ilaba{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-ma2ilaba{width:227px;height:auto;}#comp-lp801byr{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp801byr{width:236px;height:236px;}#comp-lp806rq1{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp806rq1{width:227px;height:auto;}#comp-lp80a2wb{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80a2wb{width:236px;height:236px;}#comp-lp80btvc{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80btvc{width:227px;height:auto;}#comp-lp80hv5x{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80hv5x{width:227px;height:230px;}#comp-lp80ilml{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80ilml{width:227px;height:auto;}#comp-m92t9x5r{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-m92t9x5r{width:309px;height:317px;}#comp-m92tbel6{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-m92tbel6{width:227px;height:auto;}#comp-lp80qvd4{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80qvd4{width:251px;height:251px;}#comp-lp8022xa{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp8022xa{width:236px;height:236px;}#comp-lp8076fb{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp8076fb{width:227px;height:auto;}#comp-lp80d98y{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80d98y{width:236px;height:230px;}#comp-lp80e2ng{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80e2ng{width:227px;height:auto;}#comp-lp80ocab{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-lp80ocab{width:278px;height:278px;}#comp-lp80p5to{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-lp80p5to{width:227px;height:auto;}#comp-m92tdpit{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-m92tdpit{width:334px;height:331px;}#comp-m92texrx{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-m92texrx{width:227px;height:auto;}#comp-m92topky{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-m92topky{width:227px;height:auto;}#comp-l09mhca11{left:0;margin-left:0;width:100%;min-width:0;}[data-mesh-id=comp-l09mhca11inlineContent]{height:auto;width:100%;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer]{position:static;display:grid;height:auto;width:100%;min-height:auto;grid-template-rows:repeat(3, min-content) 1fr;grid-template-columns:100%;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcaa"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcaa"]{position:relative;margin:55px 0px 10px calc((100% - 980px) * 0.5);left:0px;grid-area:1 / 1 / 2 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcah"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcah"]{position:relative;margin:0px 0px 52px calc((100% - 980px) * 0.5);left:472px;grid-area:2 / 1 / 3 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcap"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcap"]{position:relative;margin:10px 0px 50px calc((100% - 980px) * 0.5);left:10px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcaw"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcaw"]{position:relative;margin:0px 0px 52px calc((100% - 980px) * 0.5);left:214px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l0b5gnig"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l0b5gnig"]{position:relative;margin:3px 0px 57px calc((100% - 980px) * 0.5);left:434px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l09mhcb3"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l09mhcb3"]{position:relative;margin:0px 0px 60px calc((100% - 980px) * 0.5);left:646px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l0b5oecg"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l0b5oecg"]{position:relative;margin:0px 0px 60px calc((100% - 980px) * 0.5);left:813px;grid-area:3 / 1 / 4 / 2;justify-self:start;align-self:start;}[data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > [id="comp-l0b5rnzm"], [data-mesh-id=comp-l09mhca11inlineContent-gridContainer] > interact-element > [id="comp-l0b5rnzm"]{position:relative;margin:0px 0px 11px calc((100% - 980px) * 0.5);left:354px;grid-area:4 / 1 / 5 / 2;justify-self:start;align-self:start;}#comp-l09mhcaa{--backgroundColor:0,0,0;--alpha-backgroundColor:0;--blendMode:normal;--textShadow:0px 0px transparent;--textOutline:0px 0px transparent;}#comp-l09mhcaa{width:980px;height:auto;}#comp-l09mhcah{--lnw:6px;--brd:249,171,67;--alpha-brd:1;}#comp-l09mhcah{width:30px;height:6px;}#comp-l09mhcap{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09mhcap{width:150px;height:66px;}#comp-l09mhcaw{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09mhcaw{width:126px;height:74px;}#comp-l0b5gnig{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l0b5gnig{width:106px;height:66px;}#comp-l09mhcb3{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l09mhcb3{width:66px;height:66px;}#comp-l0b5oecg{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l0b5oecg{width:66px;height:66px;}#comp-l0b5rnzm{--contentPaddingLeft:0px;--contentPaddingRight:0px;--contentPaddingTop:0px;--contentPaddingBottom:0px;}#comp-l0b5rnzm{width:270px;height:30px;}</style>
<style id="stylableCss_zwmhs">/* END STYLABLE DIRECTIVE RULES */

#comp-l84duifh .style-la10x1ud__root{
    -st-extends: StylableButton;
    transition: all 0.2s ease, visibility 0s;
    border-radius: 60px;
    border: 0px solid rgb(29, 103, 205);
    background: #F9AB43
}

/* START STYLABLE DIRECTIVE RULES */

#comp-l84duifh .style-la10x1ud__root:hover{
    background: #689ADE;
    border: 0px solid rgb(29, 103, 205)
}

#comp-l84duifh .style-la10x1ud__root:hover .StylableButton2545352419__label{
    color: #FFFFFF
}

#comp-l84duifh .style-la10x1ud__root:disabled{
    background: #E2E2E2
}

#comp-l84duifh .style-la10x1ud__root:disabled .StylableButton2545352419__label{
    color: #8F8F8F
}

#comp-l84duifh .style-la10x1ud__root:disabled .StylableButton2545352419__icon{
    fill: #8F8F8F
}

#comp-l84duifh .style-la10x1ud__root .StylableButton2545352419__container{
    transition: inherit
}

#comp-l84duifh .style-la10x1ud__root .StylableButton2545352419__label{
    transition: inherit;
    font-style: normal;
    letter-spacing: 0.05em;
    font-size: 16px;
    font-family: barlow-medium,barlow,sans-serif;
    font-weight: 700;
    color: #000000
}

#comp-l84duifh .style-la10x1ud__root .StylableButton2545352419__icon{
    transition: inherit;
    width: 10px;
    height: 10px;
    fill: #FFFFFF;
    display: none
}

#comp-l84duifh .style-la10x1ud__root:hover .StylableButton2545352419__icon{
    fill: #000000
}/* END STYLABLE DIRECTIVE RULES */

#comp-la11a371 .style-la11a3b21__root{
    -st-extends: StylableButton;
    transition: all 0.2s ease, visibility 0s;
    border-radius: 60px;
    border: 0px solid rgb(29, 103, 205);
    background: #F9AB43
}

/* START STYLABLE DIRECTIVE RULES */

#comp-la11a371 .style-la11a3b21__root:hover{
    background: #689ADE;
    border: 0px solid rgb(29, 103, 205)
}

#comp-la11a371 .style-la11a3b21__root:hover .StylableButton2545352419__label{
    color: #FFFFFF
}

#comp-la11a371 .style-la11a3b21__root:disabled{
    background: #E2E2E2
}

#comp-la11a371 .style-la11a3b21__root:disabled .StylableButton2545352419__label{
    color: #8F8F8F
}

#comp-la11a371 .style-la11a3b21__root:disabled .StylableButton2545352419__icon{
    fill: #8F8F8F
}

#comp-la11a371 .style-la11a3b21__root .StylableButton2545352419__container{
    transition: inherit
}

#comp-la11a371 .style-la11a3b21__root .StylableButton2545352419__label{
    transition: inherit;
    font-style: normal;
    letter-spacing: 0.05em;
    font-size: 16px;
    font-family: barlow-medium,barlow,sans-serif;
    font-weight: 700;
    color: #000000
}

#comp-la11a371 .style-la11a3b21__root .StylableButton2545352419__icon{
    transition: inherit;
    width: 10px;
    height: 10px;
    fill: #FFFFFF;
    display: none
}

#comp-la11a371 .style-la11a3b21__root:hover .StylableButton2545352419__icon{
    fill: #000000
}/* END STYLABLE DIRECTIVE RULES */

#comp-mj6yzcsa .style-mj6yzcsq1__root{
    -st-extends: StylableButton;
    transition: all 0.2s ease, visibility 0s;
    border-radius: 60px;
    border: 0px solid rgb(29, 103, 205);
    background: #F9AB43
}

/* START STYLABLE DIRECTIVE RULES */

#comp-mj6yzcsa .style-mj6yzcsq1__root:hover{
    background: #689ADE;
    border: 0px solid rgb(29, 103, 205)
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:hover .StylableButton2545352419__label{
    color: #FFFFFF
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:disabled{
    background: #E2E2E2
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:disabled .StylableButton2545352419__label{
    color: #8F8F8F
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:disabled .StylableButton2545352419__icon{
    fill: #8F8F8F
}

#comp-mj6yzcsa .style-mj6yzcsq1__root .StylableButton2545352419__container{
    transition: inherit
}

#comp-mj6yzcsa .style-mj6yzcsq1__root .StylableButton2545352419__label{
    transition: inherit;
    font-style: normal;
    letter-spacing: 0.05em;
    font-size: 16px;
    font-family: barlow-medium,barlow,sans-serif;
    font-weight: 700;
    color: #000000
}

#comp-mj6yzcsa .style-mj6yzcsq1__root .StylableButton2545352419__icon{
    transition: inherit;
    width: 10px;
    height: 10px;
    fill: #FFFFFF;
    display: none
}

#comp-mj6yzcsa .style-mj6yzcsq1__root:hover .StylableButton2545352419__icon{
    fill: #000000
}</style>
<style id="compCssMappers_zwmhs">#zwmhs{width:auto;min-height:40px;}#pageBackground_zwmhs{--bg-position:absolute;--bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;}#comp-l09mhc2y{--bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;min-width:980px;}#comp-l09mlcj0{--height:257px;--width:600px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat;}#comp-l09mhc3x{--min-height:67px;--text-direction:var(--wix-opt-in-direction);}#comp-l09mhc5h{--bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;min-width:980px;}#comp-l09mhc6a{--min-height:507px;--text-direction:var(--wix-opt-in-direction);}#comp-lp7zp3wk{--bg-overlay-color:transparent;--bg-gradient:none;min-width:980px;}#comp-lp803ax7{--text-direction:var(--wix-opt-in-direction);}#comp-lp7zxqiz{--height:236px;--width:236px;}#comp-lp8069en{--text-direction:var(--wix-opt-in-direction);}#comp-lp807zjc{--height:230px;--width:227px;}#comp-lp8094jr{--text-direction:var(--wix-opt-in-direction);}#comp-lp80frpc{--height:236px;--width:236px;}#comp-lp80h07q{--text-direction:var(--wix-opt-in-direction);}#comp-lp80srr7{--text-direction:var(--wix-opt-in-direction);}#comp-m92tmqzu{--height:317px;--width:302px;}#comp-ma2ikgvf{--height:299px;--width:302px;}#comp-ma2ilaba{--text-direction:var(--wix-opt-in-direction);}#comp-lp801byr{--height:236px;--width:236px;}#comp-lp806rq1{--text-direction:var(--wix-opt-in-direction);}#comp-lp80a2wb{--height:236px;--width:236px;}#comp-lp80btvc{--text-direction:var(--wix-opt-in-direction);}#comp-lp80hv5x{--height:230px;--width:227px;}#comp-lp80ilml{--text-direction:var(--wix-opt-in-direction);}#comp-m92t9x5r{--height:317px;--width:309px;}#comp-m92tbel6{--text-direction:var(--wix-opt-in-direction);}#comp-lp80qvd4{--height:251px;--width:251px;}#comp-lp8022xa{--height:236px;--width:236px;}#comp-lp8076fb{--text-direction:var(--wix-opt-in-direction);}#comp-lp80d98y{--height:230px;--width:236px;}#comp-lp80e2ng{--text-direction:var(--wix-opt-in-direction);}#comp-lp80ocab{--height:278px;--width:278px;}#comp-lp80p5to{--text-direction:var(--wix-opt-in-direction);}#comp-m92tdpit{--height:331px;--width:334px;}#comp-m92texrx{--text-direction:var(--wix-opt-in-direction);}#comp-m92topky{--text-direction:var(--wix-opt-in-direction);}#comp-l09mhca11{--bg-overlay-color:rgb(var(--color_11));--bg-gradient:none;min-width:980px;}#comp-l09mhcaa{--text-direction:var(--wix-opt-in-direction);}#comp-l09mhcah{transform-origin:center 3px;}#comp-l09mhcap{--height:66px;--width:150px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat;}#comp-l09mhcaw{--height:74px;--width:126px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat;}#comp-l0b5gnig{--height:66px;--width:106px;}#comp-l09mhcb3{--height:66px;--width:66px;}#comp-l0b5oecg{--height:66px;--width:66px;}#comp-l0b5rnzm{--height:30px;--width:270px;--mask-image:url("data:image/svg+xml,%3Csvg preserveAspectRatio='none' data-bbox='20 20 160 160' viewBox='20 20 160 160' height='200' width='200' xmlns='http://www.w3.org/2000/svg' data-type='shape'%3E%3Cg%3E%3Cpath d='M180 20v160H20V20h160z'/%3E%3C/g%3E%3C/svg%3E%0A");--mask-position:0% 0%;--mask-size:100% 100%;--mask-repeat:no-repeat;}</style>

</head>
<body class='' >




    <!-- domStoreHtml -->
    <svg data-dom-store style="display:none"><defs id="dom-store-defs"></defs></svg>


<div id="SITE_CONTAINER"><div id="main_MF" class="main_MF"><div id="SCROLL_TO_TOP" class="Vd6aQZ ignore-focus SCROLL_TO_TOP" role="region" tabindex="-1" aria-label="top of page">
    <span class="mHZSwn">top of page</span></div><div id="BACKGROUND_GROUP" class="backgroundGroup_zwmhs BACKGROUND_GROUP"><div id="BACKGROUND_GROUP_TRANSITION_GROUP"><div id="pageBackground_zwmhs" data-media-height-override-type="" data-media-position-override="false" class="pageBackground_zwmhs BmZ5pC"><div id="bgLayers_pageBackground_zwmhs" data-hook="bgLayers" data-motion-part="BG_LAYER pageBackground_zwmhs" class="MW5IWV"><div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div><div id="bgMedia_pageBackground_zwmhs" data-motion-part="BG_MEDIA pageBackground_zwmhs" class="VgO9Yg"></div></div></div></div></div><div id="site-root" class="site-root"><div id="masterPage" class="mesh-layout masterPage css-editing-scope">
        @include('pages.header')



<main id="PAGES_CONTAINER" class="PAGES_CONTAINER" tabindex="-1" data-main-content="true">
    <div id="SITE_PAGES" class="JsJXaX SITE_PAGES">
        <div id="SITE_PAGES_TRANSITION_GROUP" class="AnQkDU">
            <div id="zwmhs" class="dBAkHi zwmhs">
                <div class="PFkO7r wixui-page" data-testid="page-bg"></div>
                <div class="HT5ybB">
                    <div id="Containerzwmhs" class="Containerzwmhs SPY_vo">
                        <div data-mesh-id="ContainerzwmhsinlineContent" data-testid="inline-content" class="">
                            <div
                                data-mesh-id="ContainerzwmhsinlineContent-gridContainer"
                                data-testid="mesh-container-content"
                            >
                                <section
                                    id="comp-l09mhc2y"
                                    tabindex="-1"
                                    class="Oqnisf comp-l09mhc2y wixui-section"
                                    data-block-level-container="ClassicSection"
                                >
                                    <div
                                        id="bgLayers_comp-l09mhc2y"
                                        data-hook="bgLayers"
                                        data-motion-part="BG_LAYER comp-l09mhc2y"
                                        class="MW5IWV"
                                    >
                                        <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                        <div
                                            id="bgMedia_comp-l09mhc2y"
                                            data-motion-part="BG_MEDIA comp-l09mhc2y"
                                            class="VgO9Yg"
                                        ></div>
                                    </div>
                                    <div
                                        data-mesh-id="comp-l09mhc2yinlineContent"
                                        data-testid="inline-content"
                                        class=""
                                    >
                                        <div
                                            data-mesh-id="comp-l09mhc2yinlineContent-gridContainer"
                                            data-testid="mesh-container-content"
                                        >
                                            <div id="comp-l09mlcj0" class="MazNVa comp-l09mlcj0 wixui-image">
                                                <div data-testid="linkElement" class="j7pOnl">
                                                    <img
                                                        fetchpriority="high"
                                                        sizes="600px"
                                                        srcset="
                                                            https://static.wixstatic.com/media/287178_8f21d31120b64584862c94dc9b830c6a~mv2.jpg/v1/crop/x_0,y_473,w_1772,h_759/fill/w_600,h_257,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Astro%20AD%20white.jpg  1x,
                                                            https://static.wixstatic.com/media/287178_8f21d31120b64584862c94dc9b830c6a~mv2.jpg/v1/crop/x_0,y_473,w_1772,h_759/fill/w_1200,h_514,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/Astro%20AD%20white.jpg 2x
                                                        "
                                                        id="img_comp-l09mlcj0"
                                                        src="https://static.wixstatic.com/media/287178_8f21d31120b64584862c94dc9b830c6a~mv2.jpg/v1/crop/x_0,y_473,w_1772,h_759/fill/w_600,h_257,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/Astro%20AD%20white.jpg"
                                                        alt="Astro AD white.jpg"
                                                        style="object-fit: cover"
                                                        class="BI8PVQ Tj01hh"
                                                        width="600"
                                                        height="257"
                                                    />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                                <section
                                    id="comp-l09mhc5h"
                                    tabindex="-1"
                                    class="Oqnisf comp-l09mhc5h wixui-section"
                                    data-block-level-container="ClassicSection"
                                >
                                    <div
                                        id="bgLayers_comp-l09mhc5h"
                                        data-hook="bgLayers"
                                        data-motion-part="BG_LAYER comp-l09mhc5h"
                                        class="MW5IWV"
                                    >
                                        <div data-testid="colorUnderlay" class="LWbAav Kv1aVt"></div>
                                        <div
                                            id="bgMedia_comp-l09mhc5h"
                                            data-motion-part="BG_MEDIA comp-l09mhc5h"
                                            class="VgO9Yg"
                                        ></div>
                                    </div>
                                    <div
                                        data-mesh-id="comp-l09mhc5hinlineContent"
                                        data-testid="inline-content"
                                        class=""
                                    >
                                        <div
                                            data-mesh-id="comp-l09mhc5hinlineContent-gridContainer"
                                            data-testid="mesh-container-content"
                                        >
                                            <div
                                                id="comp-l09mhc6a"
                                                class="Z_l5lU ku3DBC zQ9jDz qvSjx3 Vq6kJx comp-l09mhc6a wixui-rich-text"
                                                data-testid="richTextElement"
                                            >
                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="font-style: italic" class="wixui-rich-text__text"
                                                            >Taifa Forward</span
                                                        >
                                                        is a bi-weekly digital newspaper documenting completed development projects, reforms, and public welfare programmes delivered by Kenyan
                                                        leaders across the country.</span
                                                    >
                                                </p>



                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="font-size: 22px; line-height: 1em; text-align: center"
                                                >
                                                    <span class="wixGuard wixui-rich-text__text">​</span>
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="font-style: italic" class="wixui-rich-text__text"
                                                            >Taifa Forward</span
                                                        >
                                                        Our editorial principle is simple and firm:
                                                        If it is not completed and verifiable, it does not appear in Taifa Forward.&nbsp;</span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >We do not report on:</span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                    >
                                                </p>

                                                <ul
                                                    class="font_7 wixui-rich-text__text"
                                                    style="
                                                        color: rgb(47, 46, 46);
                                                        font-family: barlow-medium, barlow, sans-serif;
                                                        font-size: 17px;
                                                    "
                                                >
                                                    <li style="line-height: 1em" class="wixui-rich-text__text">
                                                        <p
                                                            class="font_7 wixui-rich-text__text"
                                                            style="line-height: 1em; font-size: 17px"
                                                        >
                                                            <span
                                                                style="font-family: barlow-medium, barlow, sans-serif"
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                    style="color: #2f2e2e"
                                                                    class="wixui-rich-text__text"
                                                                    >Political promises&nbsp;</span
                                                                ></span
                                                            >
                                                        </p>
                                                    </li>
                                                    <li style="line-height: 1em" class="wixui-rich-text__text">
                                                        <p
                                                            class="font_7 wixui-rich-text__text"
                                                            style="line-height: 1em; font-size: 17px"
                                                        >
                                                            <span
                                                                style="font-family: barlow-medium, barlow, sans-serif"
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                    style="color: #2f2e2e"
                                                                    class="wixui-rich-text__text"
                                                                    >Planned or projected projects&nbsp;</span
                                                                ></span
                                                            >
                                                        </p>
                                                    </li>
                                                    <li style="line-height: 1em" class="wixui-rich-text__text">
                                                        <p
                                                            class="font_7 wixui-rich-text__text"
                                                            style="line-height: 1em; font-size: 17px"
                                                        >
                                                            <span
                                                                style="font-family: barlow-medium, barlow, sans-serif"
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                    style="color: #2f2e2e"
                                                                    class="wixui-rich-text__text"
                                                                    >Campaign pledges&nbsp;</span
                                                                ></span
                                                            >
                                                        </p>
                                                    </li>
                                                    <li style="line-height: 1em" class="wixui-rich-text__text">
                                                        <p
                                                            class="font_7 wixui-rich-text__text"
                                                            style="line-height: 1em; font-size: 17px"
                                                        >
                                                            <span
                                                                style="font-family: barlow-medium, barlow, sans-serif"
                                                                class="wixui-rich-text__text"
                                                                ><span
                                                                    style="color: #2f2e2e"
                                                                    class="wixui-rich-text__text"
                                                                    >Announcements without delivery
                                                                </span></span
                                                            >
                                                        </p>
                                                    </li>

                                                </ul>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >

                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>

                                                 <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >Every edition is published and distributed directly to readers through downloads and WhatsApp, ensuring accessibility and long-term reference.

                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>
                                                 <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >

                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>


                                                 <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >
                                                        Taifa Forward exists to help citizens, researchers, and voters clearly see how leadership translates into real outcomes on the ground.
                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>

                                                 <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        >

                                                        <span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>




                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            >Contact us on <a
                                                                href="mailto:info@taifaforward.co.ke"
                                                                target="_self"
                                                                class="wixui-rich-text__text"
                                                                ><a
                                                                    data-auto-recognition="true"
                                                                    href="mailto:info@taifaforward.co.ke"
                                                                    class="wixui-rich-text__text"
                                                                    >info@taifaforward.co.ke</a
                                                                ></a
                                                            >
                                                            or <a
                                                                href="mailto:ads@taifaforward.co.ke"
                                                                target="_self"
                                                                class="wixui-rich-text__text"
                                                                ><a
                                                                    data-auto-recognition="true"
                                                                    href="mailto:ads@taifaforward.co.ke"
                                                                    class="wixui-rich-text__text"
                                                                    >ads@taifaforward.co.ke</a
                                                                ></a
                                                            ></span
                                                        ></span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>

                                                <p
                                                    class="font_7 wixui-rich-text__text"
                                                    style="line-height: 1em; font-size: 17px"
                                                >
                                                    <span
                                                        style="font-family: barlow-medium, barlow, sans-serif"
                                                        class="wixui-rich-text__text"
                                                        ><span style="color: #2f2e2e" class="wixui-rich-text__text"
                                                            ><span class="wixGuard wixui-rich-text__text">​</span></span
                                                        ></span
                                                    >
                                                </p>
                                            </div>
                                            <div
                                                id="comp-l84duifh"
                                                class="comp-l84duifh"
                                                data-semantic-classname="button"
                                            >
                                                <a
                                                    data-testid="linkElement"
                                                    href="{{ route('donate-page')}}"
                                                    target="_blank"
                                                    rel="noreferrer noopener"
                                                    class="StylableButton2545352419__root style-la10x1ud__root wixui-button StylableButton2545352419__link"
                                                    aria-label="DONATE"
                                                    ><span class="StylableButton2545352419__container"
                                                        ><span
                                                            class="StylableButton2545352419__label wixui-button__label"
                                                            data-testid="stylablebutton-label"
                                                            >DONATE</span
                                                        ><span
                                                            class="StylableButton2545352419__icon wixui-button__icon"
                                                            aria-hidden="true"
                                                            data-testid="stylablebutton-icon"
                                                            ><span
                                                                ><svg
                                                                    data-bbox="13.05 2.55 33.878 54.8"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 60 60"
                                                                >
                                                                    <g>
                                                                        <path
                                                                            d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z"
                                                                        />
                                                                    </g>
                                                                </svg> </span></span></span
                                                ></a>
                                            </div>

                                            <div
                                                id="comp-mj6yzcsa"
                                                class="comp-mj6yzcsa"
                                                data-semantic-classname="button"
                                                style="width:236px"
                                            >
                                                <a
                                                    data-testid="linkElement"
                                                    href="https://wa.me/254110567872?text=SUBSCRIBE"
                                                    target="_blank"
                                                    class="StylableButton2545352419__root style-mj6yzcsq1__root wixui-button StylableButton2545352419__link"
                                                    aria-label="Subscribe on WhatsApp"
                                                    ><span class="StylableButton2545352419__container"
                                                        ><span
                                                            class="StylableButton2545352419__label wixui-button__label"
                                                            data-testid="stylablebutton-label"
                                                            >SUBSCRIBE ON WHATSAPP</span
                                                        ><span
                                                            class="StylableButton2545352419__icon wixui-button__icon"
                                                            aria-hidden="true"
                                                            data-testid="stylablebutton-icon"
                                                            ><span
                                                                ><svg
                                                                    data-bbox="13.05 2.55 33.878 54.8"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 60 60"
                                                                >
                                                                    <g>
                                                                        <path
                                                                            d="M46.5 28.9L20.6 3c-.6-.6-1.6-.6-2.2 0l-4.8 4.8c-.6.6-.6 1.6 0 2.2l19.8 20-19.9 19.9c-.6.6-.6 1.6 0 2.2l4.8 4.8c.6.6 1.6.6 2.2 0l21-21 4.8-4.8c.8-.6.8-1.6.2-2.2z"
                                                                        />
                                                                    </g>
                                                                </svg> </span></span></span
                                                ></a>
                                            </div>
                                            <div data-mesh-id="comp-l09mhc5hinlineContent-wedge-3"></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<div id="soapAfterPagesContainer" class="page-without-sosp soapAfterPagesContainer page-without-sosp"><div data-mesh-id="soapAfterPagesContainerinlineContent" data-testid="inline-content" class=""><div data-mesh-id="soapAfterPagesContainerinlineContent-gridContainer" data-testid="mesh-container-content"><div id="CONTROLLER_COMP_CUSTOM_ID" style="display:none"></div></div></div></div><footer id="SITE_FOOTER" class="xU8fqS SITE_FOOTER wixui-footer" tabindex="-1"><div class="_C0cVf"><div class="_4XcTfy" data-testid="screenWidthContainerBg"></div></div><div class="U4Bvut"><div class="G5K6X8"><div class="gUbusX" data-testid="screenWidthContainerBgCenter"></div></div><div class="CJF7A2"><div data-mesh-id="SITE_FOOTERinlineContent" data-testid="inline-content" class=""><div data-mesh-id="SITE_FOOTERinlineContent-gridContainer" data-testid="mesh-container-content"></div></div></div></div></footer></div></div><div id="SCROLL_TO_BOTTOM" class="Vd6aQZ ignore-focus SCROLL_TO_BOTTOM" role="region" tabindex="-1" aria-label="bottom of page"><span class="mHZSwn">bottom of page</span></div></div></div>








</body>
</html>
