@extends('layouts.login')

@section('content')
<style>
	.mdl-layout__container {
		position: relative;
	}
</style>

<div class="mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <div class="page-ribbon mdl-color--primary"></div>
      <main class="page-main mdl-layout__content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="page-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
			<h2>Terms of Service</h2>
			<p>Thank you for taking the time to read our terms of service.
			We've tried to keep it simple, but you must agree to these terms in order to use Alientronics.</p>

			<h4>You must provide a valid email address</h4>
			<p>We expect you to register with a valid email address.
			This will be our only way to communicate with you.
			Changes to these terms of service and any other notifications about updates
			to the service will be sent to the email address you provide.
			We will not be held responsible for any information not being received.</p>

			<h4>You own your content, not us</h4>
			<p>You retain all ownership, copyright and intellectual property rights to any content uploaded to Alientronics. Your content will only be shared with other users of your choosing and we will never share your content with third parties without your consent. The staff of Alientronics have access to your content, but we make an effort to only access it when absolutely necessary.</p>

			<h4>You're not allowed to abuse the service</h4>
			<p>Alientronics is provided assuming users will act in good faith. However, we retain the right to remove any account or content that we feel is abusing the service. In the rare event of this happening, it will most likely be for one of the following reasons: using the service for illegal reasons; uploading illegal, unauthorised or objectionable content; consuming an excessive amount of computing resources.</p>

			<h4>We're not infallible</h4>
			<p>Alientronics is provided on an 'as is' basis, without future promise of availability. Alientronics is not liable for any damages caused by the loss or inability to access your data.</p>
			<p>[Founder's note: We try hard to provide a service which is reliable, secure and regularly backed up. While the above paragraph sounds grim, we need it there to cover ourselves incase something does go wrong. We certainly aren't planning to need to fall back on it. This assurance aside, it's always good practice to back up your own data.]</p>

			<h4>Cancellation and refunds policy</h4>
			<p>Alientronics's services are paid for monthly or yearly in advance and are non-refundable. There will be no refunds or credits for partial months/years of service or downgrades. Subscription downgrades and cancellations will come into effect when your next payment is due. Upgrades to your plan will be billed immediately at the new rate for the remainder of the billing period. You may cancel your account at any time from your account subscription settings.</p>

			<h4>Paypal Reference Transactions</h4>
			<p>PayPal Reference Transactions are used to allow Alientronics to make subsequent transactions on a monthly or annual basis until you cancel your account.</p>

			<h4>Pricing changes</h4>
			<p>We will notify you of any changes to our pricing plans that affect you at least 30 days before your next payment is due. We will notify you via the email address you provided when subscribing for a paid plan.</p>

			<h4>You must be human</h4>
			<p>To protect ourselves from accidental or malicious abuse, automated scripts and programs are not permitted to register an account or access the service.</p>
          </div>
        </div>
      </main>
    </div>
@endsection