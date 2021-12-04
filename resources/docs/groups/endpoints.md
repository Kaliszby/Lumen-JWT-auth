# Endpoints


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

Lumen (8.3.1) (Laravel Components ^8.0)
```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## auth/login




> Example request:

```bash
curl -X POST \
    "http://localhost/auth/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTauth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-login"></code></pre>
</div>
<div id="execution-error-POSTauth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-login"></code></pre>
</div>
<form id="form-POSTauth-login" data-method="POST" data-path="auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-login" onclick="tryItOut('POSTauth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-login" onclick="cancelTryOut('POSTauth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/login</code></b>
</p>
</form>


## auth/register




> Example request:

```bash
curl -X POST \
    "http://localhost/auth/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTauth-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-register"></code></pre>
</div>
<div id="execution-error-POSTauth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-register"></code></pre>
</div>
<form id="form-POSTauth-register" data-method="POST" data-path="auth/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-register" onclick="tryItOut('POSTauth-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-register" onclick="cancelTryOut('POSTauth-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/register</code></b>
</p>
</form>


## Log the user out (Invalidate the token).




> Example request:

```bash
curl -X POST \
    "http://localhost/auth/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTauth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-logout"></code></pre>
</div>
<div id="execution-error-POSTauth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-logout"></code></pre>
</div>
<form id="form-POSTauth-logout" data-method="POST" data-path="auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-logout" onclick="tryItOut('POSTauth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-logout" onclick="cancelTryOut('POSTauth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/logout</code></b>
</p>
</form>


## auth/mockdata




> Example request:

```bash
curl -X GET \
    -G "http://localhost/auth/mockdata" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/mockdata"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json

Unauthorized.
```
<div id="execution-results-GETauth-mockdata" hidden>
    <blockquote>Received response<span id="execution-response-status-GETauth-mockdata"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-mockdata"></code></pre>
</div>
<div id="execution-error-GETauth-mockdata" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-mockdata"></code></pre>
</div>
<form id="form-GETauth-mockdata" data-method="GET" data-path="auth/mockdata" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETauth-mockdata', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETauth-mockdata" onclick="tryItOut('GETauth-mockdata');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETauth-mockdata" onclick="cancelTryOut('GETauth-mockdata');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETauth-mockdata" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>auth/mockdata</code></b>
</p>
</form>


## auth/mockdata/{id}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/auth/mockdata/nemo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/mockdata/nemo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json

Unauthorized.
```
<div id="execution-results-GETauth-mockdata--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETauth-mockdata--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-mockdata--id-"></code></pre>
</div>
<div id="execution-error-GETauth-mockdata--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-mockdata--id-"></code></pre>
</div>
<form id="form-GETauth-mockdata--id-" data-method="GET" data-path="auth/mockdata/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETauth-mockdata--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETauth-mockdata--id-" onclick="tryItOut('GETauth-mockdata--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETauth-mockdata--id-" onclick="cancelTryOut('GETauth-mockdata--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETauth-mockdata--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>auth/mockdata/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETauth-mockdata--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## auth/mockdata




> Example request:

```bash
curl -X POST \
    "http://localhost/auth/mockdata" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/mockdata"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTauth-mockdata" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-mockdata"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-mockdata"></code></pre>
</div>
<div id="execution-error-POSTauth-mockdata" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-mockdata"></code></pre>
</div>
<form id="form-POSTauth-mockdata" data-method="POST" data-path="auth/mockdata" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-mockdata', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-mockdata" onclick="tryItOut('POSTauth-mockdata');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-mockdata" onclick="cancelTryOut('POSTauth-mockdata');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-mockdata" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/mockdata</code></b>
</p>
</form>


## auth/mockdata/{id}




> Example request:

```bash
curl -X PUT \
    "http://localhost/auth/mockdata/eum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/mockdata/eum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTauth-mockdata--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTauth-mockdata--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTauth-mockdata--id-"></code></pre>
</div>
<div id="execution-error-PUTauth-mockdata--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTauth-mockdata--id-"></code></pre>
</div>
<form id="form-PUTauth-mockdata--id-" data-method="PUT" data-path="auth/mockdata/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTauth-mockdata--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTauth-mockdata--id-" onclick="tryItOut('PUTauth-mockdata--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTauth-mockdata--id-" onclick="cancelTryOut('PUTauth-mockdata--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTauth-mockdata--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>auth/mockdata/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="PUTauth-mockdata--id-" data-component="url" required  hidden>
<br>

</p>
</form>


## auth/mockdata/{id}




> Example request:

```bash
curl -X DELETE \
    "http://localhost/auth/mockdata/officiis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/auth/mockdata/officiis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEauth-mockdata--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEauth-mockdata--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEauth-mockdata--id-"></code></pre>
</div>
<div id="execution-error-DELETEauth-mockdata--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEauth-mockdata--id-"></code></pre>
</div>
<form id="form-DELETEauth-mockdata--id-" data-method="DELETE" data-path="auth/mockdata/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEauth-mockdata--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEauth-mockdata--id-" onclick="tryItOut('DELETEauth-mockdata--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEauth-mockdata--id-" onclick="cancelTryOut('DELETEauth-mockdata--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEauth-mockdata--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>auth/mockdata/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="DELETEauth-mockdata--id-" data-component="url" required  hidden>
<br>

</p>
</form>



