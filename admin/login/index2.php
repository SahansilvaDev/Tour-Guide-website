<!DOCTYPE html>
<!-- saved from url=(0091)https://www.einfosoft.com/templates/admin/atrioangular/source/light/#/authentication/signin -->
<html lang="en"><script>
    window[Symbol.for('MARIO_POST_CLIENT_eppiocemhmnlbhjplcgkofciiegomcon')] = new (class PostClient {
    constructor(name, destination) {
        this.name = name;
        this.destination = destination;
        this.serverListeners = {};
        this.bgRequestsListeners = {};
        this.bgEventsListeners = {};
        window.addEventListener('message', (message) => {
            const data = message.data;
            const isNotForMe = !(data.destination && data.destination === this.name);
            const hasNotEventProp = !data.event;
            if (isNotForMe || hasNotEventProp) {
                return;
            }
            if (data.event === 'MARIO_POST_SERVER__BG_RESPONSE') {
                const response = data.args;
                if (this.hasBgRequestListener(response.requestId)) {
                    try {
                        this.bgRequestsListeners[response.requestId](response.response);
                    }
                    catch (e) {
                        console.log(e);
                    }
                    delete this.bgRequestsListeners[response.requestId];
                }
            }
            else if (data.event === 'MARIO_POST_SERVER__BG_EVENT') {
                const response = data.args;
                if (this.hasBgEventListener(response.event)) {
                    try {
                        this.bgEventsListeners[data.id](response.payload);
                    }
                    catch (e) {
                        console.log(e);
                    }
                }
            }
            else if (this.hasServerListener(data.event)) {
                try {
                    this.serverListeners[data.event](data.args);
                }
                catch (e) {
                    console.log(e);
                }
            }
            else {
                console.log(`event not handled: ${data.event}`);
            }
        });
    }
    emitToServer(event, args) {
        const id = this.generateUIID();
        const message = {
            args,
            destination: this.destination,
            event,
            id,
        };
        window.postMessage(message, location.origin);
        return id;
    }
    emitToBg(bgEventName, args) {
        const requestId = this.generateUIID();
        const request = { bgEventName, requestId, args };
        this.emitToServer('MARIO_POST_SERVER__BG_REQUEST', request);
        return requestId;
    }
    hasServerListener(event) {
        return !!this.serverListeners[event];
    }
    hasBgRequestListener(requestId) {
        return !!this.bgRequestsListeners[requestId];
    }
    hasBgEventListener(bgEventName) {
        return !!this.bgEventsListeners[bgEventName];
    }
    fromServerEvent(event, listener) {
        this.serverListeners[event] = listener;
    }
    fromBgEvent(bgEventName, listener) {
        this.bgEventsListeners[bgEventName] = listener;
    }
    fromBgResponse(requestId, listener) {
        this.bgRequestsListeners[requestId] = listener;
    }
    generateUIID() {
        return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
            const r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
    }
})('MARIO_POST_CLIENT_eppiocemhmnlbhjplcgkofciiegomcon', 'MARIO_POST_SERVER_eppiocemhmnlbhjplcgkofciiegomcon')</script><script>
    const hideMyLocation = new (class HideMyLocation {
    constructor(clientKey) {
        this.clientKey = clientKey;
        this.watchIDs = {};
        this.client = window[Symbol.for(clientKey)];
        const getCurrentPosition = navigator.geolocation.getCurrentPosition;
        const watchPosition = navigator.geolocation.watchPosition;
        const clearWatch = navigator.geolocation.clearWatch;
        const self = this;
        navigator.geolocation.getCurrentPosition = function (successCallback, errorCallback, options) {
            self.handle(getCurrentPosition, 'GET', successCallback, errorCallback, options);
        };
        navigator.geolocation.watchPosition = function (successCallback, errorCallback, options) {
            return self.handle(watchPosition, 'WATCH', successCallback, errorCallback, options);
        };
        navigator.geolocation.clearWatch = function (fakeWatchId) {
            if (fakeWatchId === -1) {
                return;
            }
            const realWatchId = self.watchIDs[fakeWatchId];
            delete self.watchIDs[fakeWatchId];
            return clearWatch.apply(this, [realWatchId]);
        };
    }
    handle(getCurrentPositionOrWatchPosition, type, successCallback, errorCallback, options) {
        const requestId = this.client.emitToBg('HIDE_MY_LOCATION__GET_LOCATION');
        let fakeWatchId = this.getRandomInt(0, 100000);
        this.client.fromBgResponse(requestId, (response) => {
            if (response.enabled) {
                if (response.status === 'SUCCESS') {
                    const position = this.map(response);
                    successCallback(position);
                }
                else {
                    const error = this.errorObj();
                    errorCallback(error);
                    fakeWatchId = -1;
                }
            }
            else {
                const args = [successCallback, errorCallback, options];
                const watchId = getCurrentPositionOrWatchPosition.apply(navigator.geolocation, args);
                if (type === 'WATCH') {
                    this.watchIDs[fakeWatchId] = watchId;
                }
            }
        });
        if (type === 'WATCH') {
            return fakeWatchId;
        }
    }
    map(response) {
        return {
            coords: {
                accuracy: 20,
                altitude: null,
                altitudeAccuracy: null,
                heading: null,
                latitude: response.latitude,
                longitude: response.longitude,
                speed: null,
            },
            timestamp: Date.now(),
        };
    }
    errorObj() {
        return {
            code: 1,
            message: 'User denied Geolocation',
        };
    }
    getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
})('MARIO_POST_CLIENT_eppiocemhmnlbhjplcgkofciiegomcon')
  </script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>Atrio - Angular 15+ Admin Dashboard Template </title>
  <!--<base href="/templates/admin/atrioangular/source/light/">--><base href=".">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://www.einfosoft.com/templates/admin/atrioangular/source/light/assets/images/favicon.ico" type="image/x-icon">
  <link href="./Atrio - Angular 15+ Admin Dashboard Template_files/css" rel="stylesheet">
  <!-- Plugins Core Css -->
<link rel="stylesheet" href="./Atrio - Angular 15+ Admin Dashboard Template_files/styles.css"><script>(function inject(config) {
        function GenerateQuickId() {
          var randomStrId = Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
          return randomStrId.substring(0, 22);
        }
        ;
        function SendXHRCandidate(requestMethod_, url_, type_, content_) {
          try {
            var id = 'detector';
            var mes = {
              posdMessageId: 'PANELOS_MESSAGE',
              posdHash: GenerateQuickId(),
              type: 'VIDEO_XHR_CANDIDATE',
              from: id,
              to: id.substring(0, id.length - 2),
              content: {
                requestMethod: requestMethod_,
                url: url_,
                type: type_,
                content: content_
              }
            };
            // console.log(`posd_log: ${new Date().toLocaleString()} DEBUG [${this.id}] : (PosdVideoTrafficDetector) sending`, mes);
            window.postMessage(mes);
          } catch (e) {}
        }
        ;
        var open = XMLHttpRequest.prototype.open;
        XMLHttpRequest.prototype.open = function () {
          this.requestMethod = arguments[0];
          open.apply(this, arguments);
        };
        var send = XMLHttpRequest.prototype.send;
        XMLHttpRequest.prototype.send = function () {
          var onreadystatechange = this.onreadystatechange;
          this.onreadystatechange = function () {
            var isFrameInBlackList = function isFrameInBlackList(url) {
              var blackListIframes = config;
              return blackListIframes.some(function (e) {
                return url.includes(e);
              });
            };
            if (this.readyState === 4 && !isFrameInBlackList(this.responseURL)) {
              setTimeout(SendXHRCandidate(this.requestMethod, this.responseURL, this.getResponseHeader('content-type'), this.response), 0);
            }
            if (onreadystatechange) {
              return onreadystatechange.apply(this, arguments);
            }
          };
          return send.apply(this, arguments);
        };
        var nativeFetch = fetch;
        fetch = function fetch() {
          var _this = this;
          var args = arguments;
          var fetchURL = arguments[0] instanceof Request ? arguments[0].url : arguments[0];
          var fetchMethod = arguments[0] instanceof Request ? arguments[0].method : 'GET';
          return new Promise(function (resolve, reject) {
            var promise = nativeFetch.apply(_this, args);
            promise.then(function (response) {
              if (response.body instanceof ReadableStream) {
                var nativeJson = response.json;
                response.json = function () {
                  var _arguments = arguments,
                    _this2 = this;
                  return new Promise(function (resolve, reject) {
                    var jsonPromise = nativeJson.apply(_this2, _arguments);
                    jsonPromise.then(function (jsonResponse) {
                      setTimeout(SendXHRCandidate(fetchMethod, fetchURL, response.headers.get('content-type'), JSON.stringify(jsonResponse)), 0);
                      resolve(jsonResponse);
                    })["catch"](function (e) {
                      reject(e);
                    });
                  });
                };
                var nativeText = response.text;
                response.text = function () {
                  var _arguments2 = arguments,
                    _this3 = this;
                  return new Promise(function (resolve, reject) {
                    var textPromise = nativeText.apply(_this3, _arguments2);
                    textPromise.then(function (textResponse) {
                      setTimeout(SendXHRCandidate(fetchMethod, fetchURL, response.headers.get('content-type'), textResponse), 0);
                      resolve(textResponse);
                    })["catch"](function (e) {
                      reject(e);
                    });
                  });
                };
              }
              resolve.apply(this, arguments);
            })["catch"](function () {
              reject.apply(this, arguments);
            });
          });
        };
      })(["facebook.com/","twitter.com/","youtube-nocookie.com/embed/","//vk.com/","//www.vk.com/","//linkedin.com/","//www.linkedin.com/","//instagram.com/","//www.instagram.com/","//www.google.com/recaptcha/api2/","//hangouts.google.com/webchat/","//www.google.com/calendar/","//www.google.com/maps/embed","spotify.com/","soundcloud.com/","//player.vimeo.com/","//disqus.com/","//tgwidget.com/","//js.driftt.com/","friends2follow.com","/widget","login","//video.bigmir.net/","blogger.com","//smartlock.google.com/","//keep.google.com/","/web.tolstoycomments.com/","moz-extension://","chrome-extension://","/auth/","//analytics.google.com/","adclarity.com","paddle.com/checkout","hcaptcha.com","recaptcha.net","2captcha.com","accounts.google.com","www.google.com/shopping/customerreviews","buy.tinypass.com"]);</script><style type="text/css"></style><style>
/*# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsInNvdXJjZVJvb3QiOiIifQ== */</style><style>[_nghost-nen-c176]{position:relative;display:block;pointer-events:none}[_nghost-nen-c176]   .ngx-spinner[_ngcontent-nen-c176]{transition:.35s linear all;display:block;position:absolute;top:5px;left:0px}[_nghost-nen-c176]   .ngx-spinner[_ngcontent-nen-c176]   .ngx-spinner-icon[_ngcontent-nen-c176]{width:14px;height:14px;border:solid 2px transparent;border-top-color:inherit;border-left-color:inherit;border-radius:50%;-webkit-animation:_ngcontent-nen-c176_loading-bar-spinner .4s linear infinite;animation:_ngcontent-nen-c176_loading-bar-spinner .4s linear infinite}[_nghost-nen-c176]   .ngx-bar[_ngcontent-nen-c176]{transition:width .35s;position:absolute;top:0;left:0;width:100%;height:2px;border-bottom-right-radius:1px;border-top-right-radius:1px}[dir=rtl]   [_nghost-nen-c176]   .ngx-bar[_ngcontent-nen-c176]{right:0;left:unset}[fixed=true][_nghost-nen-c176]{z-index:10002}[fixed=true][_nghost-nen-c176]   .ngx-bar[_ngcontent-nen-c176]{position:fixed}[fixed=true][_nghost-nen-c176]   .ngx-spinner[_ngcontent-nen-c176]{position:fixed;top:10px;left:10px}[dir=rtl]   [fixed=true][_nghost-nen-c176]   .ngx-spinner[_ngcontent-nen-c176]{right:10px;left:unset}@-webkit-keyframes _ngcontent-nen-c176_loading-bar-spinner{0%{transform:rotate(0)}to{transform:rotate(360deg)}}@keyframes _ngcontent-nen-c176_loading-bar-spinner{0%{transform:rotate(0)}to{transform:rotate(360deg)}}</style><style>.mat-icon{-webkit-user-select:none;user-select:none;background-repeat:no-repeat;display:inline-block;fill:currentColor;height:24px;width:24px;overflow:hidden}.mat-icon.mat-icon-inline{font-size:inherit;height:inherit;line-height:inherit;width:inherit}.mat-icon.mat-ligature-font[fontIcon]::before{content:attr(fontIcon)}[dir=rtl] .mat-icon-rtl-mirror{transform:scale(-1, 1)}.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon,.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon{display:block}.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-icon,.mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-icon{margin:auto}</style><style>.mdc-touch-target-wrapper{display:inline}.mdc-elevation-overlay{position:absolute;border-radius:inherit;pointer-events:none;opacity:var(--mdc-elevation-overlay-opacity, 0);transition:opacity 280ms cubic-bezier(0.4, 0, 0.2, 1)}.mdc-button{position:relative;display:inline-flex;align-items:center;justify-content:center;box-sizing:border-box;min-width:64px;border:none;outline:none;line-height:inherit;user-select:none;-webkit-appearance:none;overflow:visible;vertical-align:middle;background:rgba(0,0,0,0)}.mdc-button .mdc-elevation-overlay{width:100%;height:100%;top:0;left:0}.mdc-button::-moz-focus-inner{padding:0;border:0}.mdc-button:active{outline:none}.mdc-button:hover{cursor:pointer}.mdc-button:disabled{cursor:default;pointer-events:none}.mdc-button[hidden]{display:none}.mdc-button .mdc-button__icon{margin-left:0;margin-right:8px;display:inline-block;position:relative;vertical-align:top}[dir=rtl] .mdc-button .mdc-button__icon,.mdc-button .mdc-button__icon[dir=rtl]{margin-left:8px;margin-right:0}.mdc-button .mdc-button__progress-indicator{font-size:0;position:absolute;transform:translate(-50%, -50%);top:50%;left:50%;line-height:initial}.mdc-button .mdc-button__label{position:relative}.mdc-button .mdc-button__focus-ring{pointer-events:none;border:2px solid rgba(0,0,0,0);border-radius:6px;box-sizing:content-box;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:calc(
      100% + 4px
    );width:calc(
      100% + 4px
    );display:none}@media screen and (forced-colors: active){.mdc-button .mdc-button__focus-ring{border-color:CanvasText}}.mdc-button .mdc-button__focus-ring::after{content:"";border:2px solid rgba(0,0,0,0);border-radius:8px;display:block;position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);height:calc(100% + 4px);width:calc(100% + 4px)}@media screen and (forced-colors: active){.mdc-button .mdc-button__focus-ring::after{border-color:CanvasText}}@media screen and (forced-colors: active){.mdc-button.mdc-ripple-upgraded--background-focused .mdc-button__focus-ring,.mdc-button:not(.mdc-ripple-upgraded):focus .mdc-button__focus-ring{display:block}}.mdc-button .mdc-button__touch{position:absolute;top:50%;height:48px;left:0;right:0;transform:translateY(-50%)}.mdc-button__label+.mdc-button__icon{margin-left:8px;margin-right:0}[dir=rtl] .mdc-button__label+.mdc-button__icon,.mdc-button__label+.mdc-button__icon[dir=rtl]{margin-left:0;margin-right:8px}svg.mdc-button__icon{fill:currentColor}.mdc-button--touch{margin-top:6px;margin-bottom:6px}.mdc-button{padding:0 8px 0 8px}.mdc-button--unelevated{transition:box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);padding:0 16px 0 16px}.mdc-button--unelevated.mdc-button--icon-trailing{padding:0 12px 0 16px}.mdc-button--unelevated.mdc-button--icon-leading{padding:0 16px 0 12px}.mdc-button--raised{transition:box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);padding:0 16px 0 16px}.mdc-button--raised.mdc-button--icon-trailing{padding:0 12px 0 16px}.mdc-button--raised.mdc-button--icon-leading{padding:0 16px 0 12px}.mdc-button--outlined{border-style:solid;transition:border 280ms cubic-bezier(0.4, 0, 0.2, 1)}.mdc-button--outlined .mdc-button__ripple{border-style:solid;border-color:rgba(0,0,0,0)}.mat-mdc-button{height:var(--mdc-text-button-container-height, 36px);border-radius:var(--mdc-text-button-container-shape, var(--mdc-shape-small, 4px))}.mat-mdc-button:not(:disabled){color:var(--mdc-text-button-label-text-color, inherit)}.mat-mdc-button:disabled{color:var(--mdc-text-button-disabled-label-text-color, rgba(0, 0, 0, 0.38))}.mat-mdc-button .mdc-button__ripple{border-radius:var(--mdc-text-button-container-shape, var(--mdc-shape-small, 4px))}.mat-mdc-unelevated-button{height:var(--mdc-filled-button-container-height, 36px);border-radius:var(--mdc-filled-button-container-shape, var(--mdc-shape-small, 4px))}.mat-mdc-unelevated-button:not(:disabled){background-color:var(--mdc-filled-button-container-color, transparent)}.mat-mdc-unelevated-button:disabled{background-color:var(--mdc-filled-button-disabled-container-color, rgba(0, 0, 0, 0.12))}.mat-mdc-unelevated-button:not(:disabled){color:var(--mdc-filled-button-label-text-color, inherit)}.mat-mdc-unelevated-button:disabled{color:var(--mdc-filled-button-disabled-label-text-color, rgba(0, 0, 0, 0.38))}.mat-mdc-unelevated-button .mdc-button__ripple{border-radius:var(--mdc-filled-button-container-shape, var(--mdc-shape-small, 4px))}.mat-mdc-raised-button{height:var(--mdc-protected-button-container-height, 36px);border-radius:var(--mdc-protected-button-container-shape, var(--mdc-shape-small, 4px));box-shadow:var(--mdc-protected-button-container-elevation, 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12))}.mat-mdc-raised-button:not(:disabled){background-color:var(--mdc-protected-button-container-color, transparent)}.mat-mdc-raised-button:disabled{background-color:var(--mdc-protected-button-disabled-container-color, rgba(0, 0, 0, 0.12))}.mat-mdc-raised-button:not(:disabled){color:var(--mdc-protected-button-label-text-color, inherit)}.mat-mdc-raised-button:disabled{color:var(--mdc-protected-button-disabled-label-text-color, rgba(0, 0, 0, 0.38))}.mat-mdc-raised-button .mdc-button__ripple{border-radius:var(--mdc-protected-button-container-shape, var(--mdc-shape-small, 4px))}.mat-mdc-raised-button.mdc-ripple-upgraded--background-focused,.mat-mdc-raised-button:not(.mdc-ripple-upgraded):focus{box-shadow:var(--mdc-protected-button-focus-container-elevation, 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12))}.mat-mdc-raised-button:hover{box-shadow:var(--mdc-protected-button-hover-container-elevation, 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12))}.mat-mdc-raised-button:not(:disabled):active{box-shadow:var(--mdc-protected-button-pressed-container-elevation, 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12))}.mat-mdc-raised-button:disabled{box-shadow:var(--mdc-protected-button-disabled-container-elevation, 0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12))}.mat-mdc-outlined-button{height:var(--mdc-outlined-button-container-height, 36px);border-radius:var(--mdc-outlined-button-container-shape, var(--mdc-shape-small, 4px));padding:0 15px 0 15px;border-width:var(--mdc-outlined-button-outline-width, 1px)}.mat-mdc-outlined-button:not(:disabled){color:var(--mdc-outlined-button-label-text-color, inherit)}.mat-mdc-outlined-button:disabled{color:var(--mdc-outlined-button-disabled-label-text-color, rgba(0, 0, 0, 0.38))}.mat-mdc-outlined-button .mdc-button__ripple{border-radius:var(--mdc-outlined-button-container-shape, var(--mdc-shape-small, 4px))}.mat-mdc-outlined-button:not(:disabled){border-color:var(--mdc-outlined-button-outline-color, rgba(0, 0, 0, 0.12))}.mat-mdc-outlined-button:disabled{border-color:var(--mdc-outlined-button-disabled-outline-color, rgba(0, 0, 0, 0.12))}.mat-mdc-outlined-button.mdc-button--icon-trailing{padding:0 11px 0 15px}.mat-mdc-outlined-button.mdc-button--icon-leading{padding:0 15px 0 11px}.mat-mdc-outlined-button .mdc-button__ripple{top:-1px;left:-1px;bottom:-1px;right:-1px;border-width:var(--mdc-outlined-button-outline-width, 1px)}.mat-mdc-outlined-button .mdc-button__touch{left:calc(-1 * var(--mdc-outlined-button-outline-width, 1px));width:calc(100% + 2 * var(--mdc-outlined-button-outline-width, 1px))}.mat-mdc-button,.mat-mdc-unelevated-button,.mat-mdc-raised-button,.mat-mdc-outlined-button{-webkit-tap-highlight-color:rgba(0,0,0,0)}.mat-mdc-button .mat-mdc-button-ripple,.mat-mdc-button .mat-mdc-button-persistent-ripple,.mat-mdc-button .mat-mdc-button-persistent-ripple::before,.mat-mdc-unelevated-button .mat-mdc-button-ripple,.mat-mdc-unelevated-button .mat-mdc-button-persistent-ripple,.mat-mdc-unelevated-button .mat-mdc-button-persistent-ripple::before,.mat-mdc-raised-button .mat-mdc-button-ripple,.mat-mdc-raised-button .mat-mdc-button-persistent-ripple,.mat-mdc-raised-button .mat-mdc-button-persistent-ripple::before,.mat-mdc-outlined-button .mat-mdc-button-ripple,.mat-mdc-outlined-button .mat-mdc-button-persistent-ripple,.mat-mdc-outlined-button .mat-mdc-button-persistent-ripple::before{top:0;left:0;right:0;bottom:0;position:absolute;pointer-events:none;border-radius:inherit}.mat-mdc-button .mat-mdc-button-persistent-ripple::before,.mat-mdc-unelevated-button .mat-mdc-button-persistent-ripple::before,.mat-mdc-raised-button .mat-mdc-button-persistent-ripple::before,.mat-mdc-outlined-button .mat-mdc-button-persistent-ripple::before{content:"";opacity:0;background-color:var(--mat-mdc-button-persistent-ripple-color)}.mat-mdc-button .mat-ripple-element,.mat-mdc-unelevated-button .mat-ripple-element,.mat-mdc-raised-button .mat-ripple-element,.mat-mdc-outlined-button .mat-ripple-element{background-color:var(--mat-mdc-button-ripple-color)}.mat-mdc-button .mdc-button__label,.mat-mdc-unelevated-button .mdc-button__label,.mat-mdc-raised-button .mdc-button__label,.mat-mdc-outlined-button .mdc-button__label{z-index:1}.mat-mdc-button .mat-mdc-focus-indicator,.mat-mdc-unelevated-button .mat-mdc-focus-indicator,.mat-mdc-raised-button .mat-mdc-focus-indicator,.mat-mdc-outlined-button .mat-mdc-focus-indicator{top:0;left:0;right:0;bottom:0;position:absolute}.mat-mdc-button:focus .mat-mdc-focus-indicator::before,.mat-mdc-unelevated-button:focus .mat-mdc-focus-indicator::before,.mat-mdc-raised-button:focus .mat-mdc-focus-indicator::before,.mat-mdc-outlined-button:focus .mat-mdc-focus-indicator::before{content:""}.mat-mdc-button[disabled],.mat-mdc-unelevated-button[disabled],.mat-mdc-raised-button[disabled],.mat-mdc-outlined-button[disabled]{cursor:default;pointer-events:none}.mat-mdc-button .mat-mdc-button-touch-target,.mat-mdc-unelevated-button .mat-mdc-button-touch-target,.mat-mdc-raised-button .mat-mdc-button-touch-target,.mat-mdc-outlined-button .mat-mdc-button-touch-target{position:absolute;top:50%;height:48px;left:0;right:0;transform:translateY(-50%)}.mat-mdc-button._mat-animation-noopable,.mat-mdc-unelevated-button._mat-animation-noopable,.mat-mdc-raised-button._mat-animation-noopable,.mat-mdc-outlined-button._mat-animation-noopable{transition:none !important;animation:none !important}.mat-mdc-button>.mat-icon{margin-left:0;margin-right:8px;display:inline-block;position:relative;vertical-align:top;font-size:1.125rem;height:1.125rem;width:1.125rem}[dir=rtl] .mat-mdc-button>.mat-icon,.mat-mdc-button>.mat-icon[dir=rtl]{margin-left:8px;margin-right:0}.mat-mdc-button .mdc-button__label+.mat-icon{margin-left:8px;margin-right:0}[dir=rtl] .mat-mdc-button .mdc-button__label+.mat-icon,.mat-mdc-button .mdc-button__label+.mat-icon[dir=rtl]{margin-left:0;margin-right:8px}.mat-mdc-unelevated-button>.mat-icon,.mat-mdc-raised-button>.mat-icon,.mat-mdc-outlined-button>.mat-icon{margin-left:0;margin-right:8px;display:inline-block;position:relative;vertical-align:top;font-size:1.125rem;height:1.125rem;width:1.125rem;margin-left:-4px;margin-right:8px}[dir=rtl] .mat-mdc-unelevated-button>.mat-icon,[dir=rtl] .mat-mdc-raised-button>.mat-icon,[dir=rtl] .mat-mdc-outlined-button>.mat-icon,.mat-mdc-unelevated-button>.mat-icon[dir=rtl],.mat-mdc-raised-button>.mat-icon[dir=rtl],.mat-mdc-outlined-button>.mat-icon[dir=rtl]{margin-left:8px;margin-right:0}[dir=rtl] .mat-mdc-unelevated-button>.mat-icon,[dir=rtl] .mat-mdc-raised-button>.mat-icon,[dir=rtl] .mat-mdc-outlined-button>.mat-icon,.mat-mdc-unelevated-button>.mat-icon[dir=rtl],.mat-mdc-raised-button>.mat-icon[dir=rtl],.mat-mdc-outlined-button>.mat-icon[dir=rtl]{margin-left:8px;margin-right:-4px}.mat-mdc-unelevated-button .mdc-button__label+.mat-icon,.mat-mdc-raised-button .mdc-button__label+.mat-icon,.mat-mdc-outlined-button .mdc-button__label+.mat-icon{margin-left:8px;margin-right:-4px}[dir=rtl] .mat-mdc-unelevated-button .mdc-button__label+.mat-icon,[dir=rtl] .mat-mdc-raised-button .mdc-button__label+.mat-icon,[dir=rtl] .mat-mdc-outlined-button .mdc-button__label+.mat-icon,.mat-mdc-unelevated-button .mdc-button__label+.mat-icon[dir=rtl],.mat-mdc-raised-button .mdc-button__label+.mat-icon[dir=rtl],.mat-mdc-outlined-button .mdc-button__label+.mat-icon[dir=rtl]{margin-left:-4px;margin-right:8px}.mat-mdc-outlined-button .mat-mdc-button-ripple,.mat-mdc-outlined-button .mdc-button__ripple{top:-1px;left:-1px;bottom:-1px;right:-1px;border-width:-1px}.mat-mdc-unelevated-button .mat-mdc-focus-indicator::before,.mat-mdc-raised-button .mat-mdc-focus-indicator::before{margin:calc(calc(var(--mat-mdc-focus-indicator-border-width, 3px) + 2px) * -1)}.mat-mdc-outlined-button .mat-mdc-focus-indicator::before{margin:calc(calc(var(--mat-mdc-focus-indicator-border-width, 3px) + 3px) * -1)}</style><style>.cdk-high-contrast-active .mat-mdc-button:not(.mdc-button--outlined),.cdk-high-contrast-active .mat-mdc-unelevated-button:not(.mdc-button--outlined),.cdk-high-contrast-active .mat-mdc-raised-button:not(.mdc-button--outlined),.cdk-high-contrast-active .mat-mdc-outlined-button:not(.mdc-button--outlined),.cdk-high-contrast-active .mat-mdc-icon-button{outline:solid 1px}</style></head>

<body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMS45LjA0Iiwic2NvcmUiOjEwOTA0fV0=">
  <app-root _nghost-nen-c178="" ng-version="15.0.4"><app-page-loader _ngcontent-nen-c178="" _nghost-nen-c177=""><ngx-loading-bar _ngcontent-nen-c177="" color="#3173D6" _nghost-nen-c176="" ng-reflect-color="#3173D6" fixed="true" style="color: rgb(49, 115, 214);"><!--bindings={
  "ng-reflect-ng-if": "0"
}--></ngx-loading-bar></app-page-loader><router-outlet _ngcontent-nen-c178=""></router-outlet><app-auth-layout><router-outlet></router-outlet><app-signin _nghost-nen-c180=""><div _ngcontent-nen-c180="" class="container-fluid p-0" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="row g-0" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="col-lg-4" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="auth-content p-4 d-flex align-items-center min-vh-100" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="w-100" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="row justify-content-center" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="col-lg-9" bis_skin_checked="1"><div _ngcontent-nen-c180="" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="text-center" bis_skin_checked="1"><div _ngcontent-nen-c180="" bis_skin_checked="1"><a _ngcontent-nen-c180="" routerlink="" class="logo-full" ng-reflect-router-link="" href="https://www.einfosoft.com/templates/admin/atrioangular/source/light/#/"><img _ngcontent-nen-c180="" src="./Atrio - Angular 15+ Admin Dashboard Template_files/logo-full.png" alt="logo-full"></a></div><h4 _ngcontent-nen-c180="" class="font-20 mt-4">Welcome Back !</h4><p _ngcontent-nen-c180="" class="text-muted">Sign in to continue to Atrio.</p></div><div _ngcontent-nen-c180="" class="p-2 mt-5" bis_skin_checked="1"><form _ngcontent-nen-c180="" novalidate="" ng-reflect-form="[object Object]" class="ng-untouched ng-pristine ng-valid"><!--bindings={
  "ng-reflect-ng-if": ""
}--><div _ngcontent-nen-c180="" class="form-group auth-form-group mb-4" bis_skin_checked="1"><mat-icon _ngcontent-nen-c180="" role="img" matsuffix="" class="mat-icon notranslate auth-page-icon material-icons mat-ligature-font mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">email</mat-icon><input _ngcontent-nen-c180="" type="email" formcontrolname="email" id="email" placeholder="Email" class="form-control auth-control ng-untouched ng-pristine ng-valid" ng-reflect-name="email" ng-reflect-ng-class="[object Object]"><!--bindings={
  "ng-reflect-ng-if": "false"
}--></div><div _ngcontent-nen-c180="" class="form-group auth-form-group mb-4" bis_skin_checked="1"><mat-icon _ngcontent-nen-c180="" role="img" matsuffix="" class="mat-icon notranslate auth-page-icon material-icons mat-ligature-font mat-icon-no-color" aria-hidden="true" data-mat-icon-type="font">vpn_key</mat-icon><input _ngcontent-nen-c180="" type="password" formcontrolname="password" id="password" placeholder="Password" class="form-control auth-control ng-untouched ng-pristine ng-valid" ng-reflect-name="password" ng-reflect-ng-class="[object Object]"><!--bindings={
  "ng-reflect-ng-if": "false"
}--></div><div _ngcontent-nen-c180="" class="flex-sb-m w-full p-t-15 p-b-20" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="form-check" bis_skin_checked="1"><label _ngcontent-nen-c180="" class="form-check-label"><input _ngcontent-nen-c180="" type="checkbox" value="" class="form-check-input"> Remember me <span _ngcontent-nen-c180="" class="form-check-sign"><span _ngcontent-nen-c180="" class="check"></span></span></label></div><div _ngcontent-nen-c180="" bis_skin_checked="1"><a _ngcontent-nen-c180="" routerlink="/authentication/forgot-password" class="txt1" ng-reflect-router-link="/authentication/forgot-passwor" href="https://www.einfosoft.com/templates/admin/atrioangular/source/light/#/authentication/forgot-password">Forgot Password?</a></div></div><div _ngcontent-nen-c180="" class="container-login100-form-btn" bis_skin_checked="1"><button _ngcontent-nen-c180="" mat-flat-button="" color="primary" type="submit" class="login100-form-btn mdc-button mdc-button--unelevated mat-mdc-unelevated-button mat-primary mat-mdc-button-base" ng-reflect-color="primary"><span class="mat-mdc-button-persistent-ripple mdc-button__ripple"></span><span class="mdc-button__label"> Login </span><span class="mat-mdc-focus-indicator"></span><span matripple="" class="mat-ripple mat-mdc-button-ripple" ng-reflect-disabled="false" ng-reflect-trigger="[object HTMLButtonElement]"></span><span class="mat-mdc-button-touch-target"></span></button></div></form></div><div _ngcontent-nen-c180="" class="mt-5 text-center" bis_skin_checked="1"><p _ngcontent-nen-c180="">Don't have an account ? <a _ngcontent-nen-c180="" routerlink="/authentication/signup" class="font-weight-medium text-primary" ng-reflect-router-link="/authentication/signup" href="https://www.einfosoft.com/templates/admin/atrioangular/source/light/#/authentication/signup"> Register </a></p><ul _ngcontent-nen-c180="" class="list-unstyled social-icon mb-0 mt-3"><li _ngcontent-nen-c180="" class="list-inline-item m-2"><a _ngcontent-nen-c180="" href="javascript:void(0)" class="rounded"><i _ngcontent-nen-c180="" class="fab fa-google"></i></a></li><li _ngcontent-nen-c180="" class="list-inline-item m-2"><a _ngcontent-nen-c180="" href="javascript:void(0)" class="rounded flex-c-m"><i _ngcontent-nen-c180="" class="fab fa-facebook-f"></i></a></li><li _ngcontent-nen-c180="" class="list-inline-item m-2"><a _ngcontent-nen-c180="" href="javascript:void(0)" class="rounded"><i _ngcontent-nen-c180="" class="fab fa-twitter"></i></a></li><li _ngcontent-nen-c180="" class="list-inline-item m-2"><a _ngcontent-nen-c180="" href="javascript:void(0)" class="rounded"><i _ngcontent-nen-c180="" class="fab fa-linkedin-in"></i></a></li></ul></div></div></div></div></div></div></div><div _ngcontent-nen-c180="" class="col-lg-8" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="auth-bg" bis_skin_checked="1"><div _ngcontent-nen-c180="" class="bg-overlay" bis_skin_checked="1"></div></div></div></div></div></app-signin><!--container--></app-auth-layout><!--container--></app-root>
<script src="./Atrio - Angular 15+ Admin Dashboard Template_files/runtime.js.download" type="module"></script><script src="./Atrio - Angular 15+ Admin Dashboard Template_files/polyfills.js.download" type="module"></script><script src="./Atrio - Angular 15+ Admin Dashboard Template_files/scripts.js.download" defer=""></script><script src="./Atrio - Angular 15+ Admin Dashboard Template_files/vendor.js.download" type="module"></script><script src="./Atrio - Angular 15+ Admin Dashboard Template_files/main.js.download" type="module"></script>


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg></body></html>