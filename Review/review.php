<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylereview.css">
    <title>Review</title>
</head>

<body>
    <div class="supaviews">
        <img class="supaviews__logo" src="https://app.supabase.io/img/supabase-logo.svg" />
        <div class="supaviews__gradient"></div>
        <div class="supaviews__add">
            <div class="supaview">
                <h1 class="supaview__title">Add a new review</h1>
                <form id="review">
                    <fieldset class="supaview__rating">
                        <input type="radio" id="star5" name="rate" value="5" /><label for="star5"></label>
                        <input type="radio" id="star4" name="rate" value="4" /><label for="star4"></label>
                        <input type="radio" id="star3" name="rate" value="3" /><label for="star3"></label>
                        <input type="radio" id="star2" name="rate" value="2" /><label for="star2"></label>
                        <input type="radio" id="star1" name="rate" value="1" /><label for="star1"></label>
                    </fieldset>
                    <div class="supaview__copy">
                        <input type="text" name="name" placeholder="Name" />
                        <textarea name="message" placeholder="Message" rows="5"></textarea>
                    </div>
                    <button class="supaview__submit">Submit review</button>
                </form>
            </div>
        </div>
        <div class="supaviews__list">
        </div>
    </div>


    <script>
        // Supabase import
        import {
            createClient
        } from 'https://jspm.dev/@supabase/supabase-js';

        // Supabase initialization
        const supaURL = '';
        const supaKEY = '';
        const supabase = createClient(supaURL, supaKEY);

        /*
        Supabase Database structure
        	table name: supaviews
        	id: int4, primary key, created with the table
        	name: varchar, required
        	message: text, required
        	rate: int4, required
        	created: date, required, default value now()
        */

        // Supaviews implementation
        const reviewsEl = document.querySelector('.supaviews__list');

        function renderError(error) {
            console.warn(error);
            reviewsEl.innerHTML = `<div class="supaerror">${error}</div>`;
        }

        function renderStars(rate) {
            let rating = '';
            for (let i = 0; i < 5; i++) {
                rating += `<i class="fas fa-star ${i < rate ? 'checked' : ''}"></i>`;
            }
            return rating;
        }

        function renderReview(review) {
            const {
                name,
                message,
                created
            } = review;
            const stars = renderStars(review.rate);

            const element = document.createElement("DIV");
            element.classList.add('supaview');
            element.innerHTML = `
		<div class="supaview__stars">${stars}</div>
		<div class="supaview__name">${name}</div>
		<div class="supaview__message">${message}</div>
		<div class="supaview__date">${created}</div>
	`;

            return element;
        }

        async function renderReviews() {
            // GET all reviews
            const {
                data: supaviews,
                error
            } = await supabase.from('supaviews').select('*');

            if (error) {
                renderError(`ERROR: ${error.message}`);
                return;
            }

            reviewsEl.innerHTML = '';
            supaviews.forEach(supaview => {
                reviewsEl.prepend(renderReview(supaview));
            });
        }

        function handleForm() {
            const form = document.getElementById('review');
            const obj = {};
            form.addEventListener('submit', async (e) => {
                e.preventDefault();

                const formData = new FormData(form);
                for (let key of formData.keys()) {
                    obj[key] = formData.get(key);
                }

                // INSERT a new review
                const {
                    error
                } = await supabase.from('supaviews').insert([obj]);
                if (error) {
                    renderError(`ERROR: ${error.message}`);
                    return;
                }

                form.reset();
                renderReviews();
            });
        }

        renderReviews();
        handleForm();
    </script>
</body>

</html>