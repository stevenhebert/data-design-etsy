<!DOCTYPE html>
<meta charset="UTF-8">

<html lang="en">

	<title>Data Design Etsy</title>

		<body>

			<h1>Purpose, Audience, Goal:</h1> This project is a retail platform focused on the retailers experience. The
			site will offer a venue for sellers of unique goods to connect with their niche buyers. The goal of the project
			is to establish a retail-home catered to the craft enthusiast. The typical seller is not soley interested in
			profit, nor is the typical buyer necessarily interested in the best value.



			<h1>Persona:</h1>

			<h2>Profession</h2> Seller profile for producer of hair-ables <em>"hair-wearables"</em> made from donated canine
			trimmings. this unique individual is is an ethical purveyor of cosmetic and beauty-enhancing items. seller is
			adamant about conveying this information to buyers.

			<h2>Technology</h2> Although an expert in her field, user is technologically inept; she's easily frustrated by
			technological barriers. Is able to navigate a computer with little assistance and is capable of
			recording/capturing media with her mobile device.

			<h2>Attitude/Behavior</h2> Seller has an open schedule which she prefers not to spend wrestling with computer
			problems.

			<h2>Frustration/Needs</h2> Seller needs a platform that is easy to navigate and provides easy access
			to technical support. The seller desires a store front that is polished and showcases her items. Item listings
			should offer a variety of ways to convey product information, production details and materials, and shipping
			and return policies. The platform should be accessible to an international audience, accept a variety of
			payment options, as well as provide performance metrics.

			<h2>Goals</h2> The seller needs an incentive to choose this site over competing platforms (e.g., eBay, Amazon).
			She needs a retail venue oriented towards custom, one-off goods, not mass-produced goods. This should be the
			first destination both buyers and sellers think of for this type of item.

			<h2>User Story</h2> As a retailer, I need a no-hassle experience to market my goods to an international audience.



			<h1>Use Case:</h1> A number of buyers have sent payments for the sellers items. A handful of potential buyers
			have inquired about the specifics regarding the sellers items.

			The seller prepares her orders for pickup by USPS. After packaging the items she updates the status of her
			orders and uploads tracking information for the buyers. She then responds to her inquiries and checks her
			inventory.

			While out shopping at hobby lobby she sell a couple more items. Her receives this notification via the etsy
			mobile application and restocks her supplies.



			<h1>Interaction Flow:</h1>

			<h2>Profile Creation</h2> Site patron clicks "register" -> JS creates pop-up dialog askign for users
			information -> user fills in personal information manually or by linking social media profile -> user chooses
			username and password (username must be valid, appropriate, and unqiue) then is directed to profile home ->
			user presented with additional options to personalize their profile, fill in payment info, shipping address,
			etc.

			<h2>Shop Creation</h2> Registered user clicks "sell on Etsy" -> directed informational page regarding incentives
			of selling on Etsy -> moves forward by clicking "open shop" - redirected to registration page -> user is then
			prompted to choose a default language, specify shop locality, specify shop currency, and specify their retailing
			intentions -> user moves forward by submitting changes and is then directed to a page where she can specify her
			desired shop name; depending on appropriateness and existing shop names, name is confirmed or rejected -> after
			shop name is approved Etsy establishes the users shop -> is redirects user to their shops home page -> user can
			now begin to list items in shop.

			<h2>Item Listing</h2> After shop is established user lists items -> clicks "add a listing" -> redirected to
			product information page -> seller is provided fields to specify item title, upload photos, describe the item,
			item category, renewal options, item type, item description, section, tags, materials, price, quantity,
			customization, list quantity available, customizations, shipping and return policies and cost -> user may then
			preview the listing, or submit the finalized listing.



			<h1>Conceptual Model:</h1>

			<h2>(Entities) & Attributes</h2>

			<ul>(userProfile)
				<li>firstName</li>
				<li>lastName</li>
				<li>email</li>
				<li>password</li>
				<li>username</li>
				<li>joinDate</li>
				<li>location</li>
				<li>avatar</li>
			</ul>

			<ul>(userStore)
				<li>storeName</li>
				<li>aboutStore</li>
				<li>buyerReviews</li>
				<li>terms</li>
			</ul>

			<ul>(sellerItems)
				<li>(price, itemDescription, paymentMethod, photos, tags)</li>li>
			</ul>

			<h2>Relations</h2>
			<ul>
				<li>(1)profile->(n)sellerStores</li>
				<li>(1)sellerStore->(n)sellerItems</li>
			</ul>





		</body>
</html>

