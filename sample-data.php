<?php
/**
 * Sample Data Layer for Ajola Printwell Frontend Demo
 * Provides static mock data for website settings, categories, products, sliders, testimonials, and clients.
 */

$website = [
    'id' => 1,
    'name' => 'Ajola Printwell',
    'address' => 'Plot No. 45/2, GIDC Industrial Estate',
    'address1' => 'Ahmedabad, Gujarat 382445, India',
    'mobile' => '+91 98765 43210',
    'mobile1' => '+91 98765 43211',
    'email' => 'info@ajolaprintwell.com',
    'email1' => 'sales@ajolaprintwell.com',
    'fb' => 'https://facebook.com',
    'google' => 'https://google.com',
    'insta' => 'https://instagram.com',
    'whatsapp' => '919876543210',
    'logo' => '../img/f3e1be8ce4dd72d87f0d51c04b1bac79.logo.png',
    'banner' => '../img/slider/626cacca0021c1a633871e319ed6c946.n12.jpg',
];

$home_sliders = [
    [
        'id' => 1,
        'title' => 'Quality Packaging Pouches',
        'subtitle' => 'Specialized pouches for Pesticides, Food, Spices and Seeds',
        'image' => '../img/slider/626cacca0021c1a633871e319ed6c946.n12.jpg',
    ],
    [
        'id' => 2,
        'title' => 'Innovative Printing & Lamination',
        'subtitle' => 'High barrier protection and sustainable eco-friendly materials',
        'image' => '../img/slider/7d0dbc43da97bfc04796544871abfc07.n9.jpg',
    ],
    [
        'id' => 3,
        'title' => 'Customized Pouch Solutions',
        'subtitle' => 'Tailored dimensions, attractive designs and superior seal strength',
        'image' => '../img/slider/cd896e5dd3ed86dacd6d926a4d0dc78c.n13.jpg',
    ],
];

$categories = [
    [
        'id' => 1,
        'name' => 'Pesticides Pouches',
        'url' => 'pesticides-pouches',
        'thumbnail' => '../img/product/006007f4fa08b09acb10b38799b5dba1.5.jpeg',
        'image' => '../img/product/006007f4fa08b09acb10b38799b5dba1.5.jpeg',
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Pesticides Packaging Pouches | Ajola Printwell',
        'meta_tags' => 'pesticides, pouches, agrochemicals, barrier packaging',
        'meta_description' => 'High barrier multi-layer pesticide packaging pouches designed for chemical resistance and leak prevention.',
        'description' => '<p>Ajola Printwell manufactures premium high-barrier multi-layer laminated pouches specifically engineered for agricultural chemicals, fertilizers, and pesticides. Featuring superior puncture resistance, robust sealing, and zero-leakage durability.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 2,
        'name' => 'Food Packaging Pouches',
        'url' => 'food-packaging-pouches',
        'thumbnail' => '../img/product/02beb3ed646a8233ec47645350ccbb2e.3.jpeg',
        'image' => '../img/product/02beb3ed646a8233ec47645350ccbb2e.3.jpeg',
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Food Packaging Pouches | Ajola Printwell',
        'meta_tags' => 'food packaging, namkeen pouches, snacks packaging, hygiene',
        'meta_description' => 'Food grade printed pouches ensuring aroma retention, crunchiness and fresh shelf life.',
        'description' => '<p>Food-grade packaging solutions made from non-toxic materials. Engineered to preserve crispiness, aroma, and taste while offering high-definition rotogravure printing for attractive retail display.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 3,
        'name' => 'Spices Packaging Pouches',
        'url' => 'spices-packaging-pouches',
        'thumbnail' => '../img/product/03e4c5adca2444ac0a39484b73a1bb9b.2.jpeg',
        'image' => '../img/product/03e4c5adca2444ac0a39484b73a1bb9b.2.jpeg',
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Spices Packaging Pouches | Ajola Printwell',
        'meta_tags' => 'spices pouches, masala packaging, seasoning bags, aroma lock',
        'meta_description' => 'Multi-layer aroma-locking spice pouches engineered for turmeric, chilli and spice powders.',
        'description' => '<p>Specialized multi-layer barrier films prevent the loss of volatile essential oils and rich fragrances in whole and powdered spices. Protects against light, oxidation, and moisture ingress.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 4,
        'name' => 'Seeds Packaging Pouches',
        'url' => 'seeds-packaging-pouches',
        'thumbnail' => '../img/product/05acbdd33b373e827496d081f974318f.3.jpeg',
        'image' => '../img/product/05acbdd33b373e827496d081f974318f.3.jpeg',
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Seeds Packaging Solutions | Ajola Printwell',
        'meta_tags' => 'seeds pouches, hybrid seeds, agriculture packaging, moisture proof',
        'meta_description' => 'Puncture proof seed packaging bags protecting germination rate and seed vitality.',
        'description' => '<p>Moisture-proof and puncture-resistant seed packaging materials designed to safeguard seed germination quality and physical integrity under diverse transport conditions.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 5,
        'name' => 'Standing Zipper Pouches',
        'url' => 'standing-zipper-pouches',
        'thumbnail' => '../img/product/05edcc2099219550d4de4e9d29a3563c.4.jpeg',
        'image' => '../img/product/05edcc2099219550d4de4e9d29a3563c.4.jpeg',
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Standing Zipper Pouches | Ajola Printwell',
        'meta_tags' => 'zipper pouches, standup pouches, resealable pouches, retail packaging',
        'meta_description' => 'Resealable stand-up pouches with zippers for consumer snacks and confectionery.',
        'description' => '<p>Convenient self-standing zipper pouches offering high consumer convenience, resealability, and excellent upright shelf presence with custom transparent display windows.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 6,
        'name' => 'Vacuum Pouches',
        'url' => 'vacuum-pouches',
        'thumbnail' => '../img/product/0948931969d859606c684696c465f884.5.jpeg',
        'image' => '../img/product/0948931969d859606c684696c465f884.5.jpeg',
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Vacuum Packaging Pouches | Ajola Printwell',
        'meta_tags' => 'vacuum pouches, heavy duty packaging, airtight bags, barrier',
        'meta_description' => 'Heavy duty airtight vacuum pouches for industrial and food preservation.',
        'description' => '<p>High mechanical strength and oxygen barrier properties that ensure extended shelf-life and airtight vacuum preservation for perishable and sensitive industrial goods.</p>',
        'status' => 'Active',
    ],
];

$products = [
    [
        'id' => 1,
        'category_id' => 1,
        'name' => 'Pesticide Laminated Foil Pouch',
        'url' => 'pesticide-laminated-foil-pouch',
        'thumbnail' => '../img/product/006007f4fa08b09acb10b38799b5dba1.5.jpeg',
        'image' => '../img/product/006007f4fa08b09acb10b38799b5dba1.5.jpeg',
        'price' => 450,
        'qty' => 1000,
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Pesticide Laminated Foil Pouch - Ajola Printwell',
        'meta_tags' => 'pesticide, pouches, printing, packaging',
        'meta_description' => 'High barrier multilayer pesticide laminated pouch for chemical packaging.',
        'description' => '<p>High quality pesticide laminated pouch with chemical-resistant foil barrier to ensure safety and long shelf-life.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 2,
        'category_id' => 1,
        'name' => 'Agricultural Chemical Barrier Pouch',
        'url' => 'agricultural-chemical-barrier-pouch',
        'thumbnail' => '../img/product/014f4e8f732dc66165e2583324956433.ajola15.jpeg',
        'image' => '../img/product/014f4e8f732dc66165e2583324956433.ajola15.jpeg',
        'price' => 650,
        'qty' => 500,
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Agricultural Chemical Barrier Pouch',
        'meta_tags' => 'agricultural, chemical, pouch, foil',
        'meta_description' => 'Durable multi-layer foil pouches for agricultural chemicals and fertilizers.',
        'description' => '<p>Durable multi-layer foil pouches for agricultural chemicals, fertilizers and pesticides with puncture resistance.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 3,
        'category_id' => 2,
        'name' => 'Namkeen & Snack Packaging Pouch',
        'url' => 'namkeen-snack-packaging-pouch',
        'thumbnail' => '../img/product/02beb3ed646a8233ec47645350ccbb2e.3.jpeg',
        'image' => '../img/product/02beb3ed646a8233ec47645350ccbb2e.3.jpeg',
        'price' => 380,
        'qty' => 1000,
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Namkeen & Snack Packaging Pouch',
        'meta_tags' => 'food, snacks, namkeen, packaging',
        'meta_description' => 'Moisture resistant food grade pouches for snacks and crispy food items.',
        'description' => '<p>Moisture and aroma barrier food packaging pouches keeping snacks crispy and fresh for months.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 4,
        'category_id' => 2,
        'name' => 'Printed Food Grade Pouch',
        'url' => 'printed-food-grade-pouch',
        'thumbnail' => '../img/product/0393604acdd6d09d3a13f2998b9c215a.ajola1.jpg',
        'image' => '../img/product/0393604acdd6d09d3a13f2998b9c215a.ajola1.jpg',
        'price' => 520,
        'qty' => 800,
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Printed Food Grade Pouch',
        'meta_tags' => 'printed pouch, food grade, rotogravure',
        'meta_description' => 'High quality rotogravure printed pouches for various food products.',
        'description' => '<p>Vibrant rotogravure printed pouches that enhance product appeal on retail shelves.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 5,
        'category_id' => 3,
        'name' => 'Garam Masala Spices Pouch',
        'url' => 'garam-masala-spices-pouch',
        'thumbnail' => '../img/product/03e4c5adca2444ac0a39484b73a1bb9b.2.jpeg',
        'image' => '../img/product/03e4c5adca2444ac0a39484b73a1bb9b.2.jpeg',
        'price' => 420,
        'qty' => 1200,
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Garam Masala Spices Pouch',
        'meta_tags' => 'spices, masala, packaging, aroma barrier',
        'meta_description' => 'Special aroma locking pouch designed for spices, seasonings, and herbs.',
        'description' => '<p>Premium spice packaging pouch engineered to preserve aroma, essential oils, and flavor integrity.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 6,
        'category_id' => 3,
        'name' => 'Turmeric & Chilli Powder Pouch',
        'url' => 'turmeric-chilli-powder-pouch',
        'thumbnail' => '../img/product/0535e35ec85ccf267ec2da04a079714e.ajola8.jpeg',
        'image' => '../img/product/0535e35ec85ccf267ec2da04a079714e.ajola8.jpeg',
        'price' => 350,
        'qty' => 1500,
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Turmeric & Chilli Powder Pouch',
        'meta_tags' => 'spice powder, packaging, turmeric',
        'meta_description' => 'Light and moisture barrier pouch ideal for ground spice powders.',
        'description' => '<p>Protects powdered spices against UV light and atmospheric moisture, retaining freshness.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 7,
        'category_id' => 4,
        'name' => 'Hybrid Seeds Packaging Pouch',
        'url' => 'hybrid-seeds-packaging-pouch',
        'thumbnail' => '../img/product/05acbdd33b373e827496d081f974318f.3.jpeg',
        'image' => '../img/product/05acbdd33b373e827496d081f974318f.3.jpeg',
        'price' => 590,
        'qty' => 600,
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Hybrid Seeds Packaging Pouch',
        'meta_tags' => 'seeds, hybrid, agriculture, packaging',
        'meta_description' => 'Puncture resistant barrier pouches for hybrid vegetable and crop seeds.',
        'description' => '<p>Puncture proof seed packaging bags that preserve seed germination rates during storage and distribution.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 8,
        'category_id' => 5,
        'name' => 'Standing Zipper Pouch with Window',
        'url' => 'standing-zipper-pouch-window',
        'thumbnail' => '../img/product/05edcc2099219550d4de4e9d29a3563c.4.jpeg',
        'image' => '../img/product/05edcc2099219550d4de4e9d29a3563c.4.jpeg',
        'price' => 750,
        'qty' => 500,
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Standing Zipper Pouch with Window',
        'meta_tags' => 'zipper, standup, pouch, window',
        'meta_description' => 'Self standing resealable zipper pouch with transparent display window.',
        'description' => '<p>Elegant self-standing zipper pouches with transparent windows for attractive product display.</p>',
        'status' => 'Active',
    ],
    [
        'id' => 9,
        'category_id' => 6,
        'name' => 'Heavy Duty Vacuum Pouch',
        'url' => 'heavy-duty-vacuum-pouch',
        'thumbnail' => '../img/product/0948931969d859606c684696c465f884.5.jpeg',
        'image' => '../img/product/0948931969d859606c684696c465f884.5.jpeg',
        'price' => 620,
        'qty' => 750,
        'brochure' => '../files/05cd3a6b1bfb5d8f87f625c4e2576271.RES LOGO (8).pdf',
        'meta_title' => 'Heavy Duty Vacuum Pouch',
        'meta_tags' => 'vacuum, seal, heavy duty, packaging',
        'meta_description' => 'High vacuum retention pouches for perishable food and industrial items.',
        'description' => '<p>High clarity vacuum bags engineered for exceptional seal strength and vacuum retention.</p>',
        'status' => 'Active',
    ],
];

$testimonials = [
    [
        'id' => 1,
        'name' => 'Rajesh Sharma',
        'company_name' => 'Kisan Agro Chemicals',
        'text' => 'Ajola Printwell has provided us with consistent high-barrier pesticide packaging. Zero leakage, strong seals, and prompt delivery every single time.',
        'image' => '../img/testimonials/1b239a3e31b7ac19fe3cb5c4afee8983.c3.jpg',
    ],
    [
        'id' => 2,
        'name' => 'Anand Patel',
        'company_name' => 'Shreeji Food Products',
        'text' => 'Their stand-up zipper pouches helped our snack brand capture prominent retail visibility. Vibrant rotogravure printing and pristine finish.',
        'image' => '../img/testimonials/34d4ae54cd5a6eb1d338a580a12cd0b0.rs.jpg',
    ],
    [
        'id' => 3,
        'name' => 'Mehul Desai',
        'company_name' => 'Apex Seeds & Organics',
        'text' => 'Exceptional puncture resistance and moisture barrier for our seed range. Highly recommended for agro-packaging solutions across India.',
        'image' => '../img/testimonials/d4132880c0becfef78a5ded5cae8d683.c2.jpg',
    ],
];

$clients = [
    [
        'id' => 1,
        'name' => 'Client 1',
        'image' => '../img/clients/0daa2cd29a05f08ab9b4d327ea927142.seesd2.jpeg',
    ],
    [
        'id' => 2,
        'name' => 'Client 2',
        'image' => '../img/clients/4161693792d6292bc3ef0b3a2ccd11da.clip (3).jpeg',
    ],
    [
        'id' => 3,
        'name' => 'Client 3',
        'image' => '../img/clients/60443d94239847575a08bba3f34899a1.fod (1).jpeg',
    ],
    [
        'id' => 4,
        'name' => 'Client 4',
        'image' => '../img/clients/80184bea30267175b069a8c753fd0309.ssed 3.jpeg',
    ],
    [
        'id' => 5,
        'name' => 'Client 5',
        'image' => '../img/clients/8afd6f40f335dd1fd4b0bd2c6e02a3ea.clp2 (2).png',
    ],
    [
        'id' => 6,
        'name' => 'Client 6',
        'image' => '../img/clients/9cdf189cfcd1ab7b0023cb398584437b.seed1.jpeg',
    ],
    [
        'id' => 7,
        'name' => 'Client 7',
        'image' => '../img/clients/c28eccceb650cf6a2687b9860d7e4fe8.cli (1).png',
    ],
    [
        'id' => 8,
        'name' => 'Client 8',
        'image' => '../img/clients/dc50bb684bc0df127a220c59c3da8a4b.cli(S) (1) (1).png',
    ],
];

$feedbacks = [
    [
        'id' => 1,
        'product_id' => 1,
        'name' => 'Vikas Patel',
        'email_id' => 'vikas@example.com',
        'star' => 5,
        'review' => 'Excellent quality pouch with zero leakage during transport.',
        'date' => '2024-02-15',
    ],
    [
        'id' => 2,
        'product_id' => 1,
        'name' => 'Ramesh Kumar',
        'email_id' => 'ramesh@example.com',
        'star' => 5,
        'review' => 'Very satisfied with the material strength and printing finish.',
        'date' => '2024-03-01',
    ],
    [
        'id' => 3,
        'product_id' => 2,
        'name' => 'Sanjay Shah',
        'email_id' => 'sanjay@example.com',
        'star' => 5,
        'review' => 'Robust foil barrier. Keeps our chemical formulations perfectly stable.',
        'date' => '2024-03-10',
    ],
    [
        'id' => 4,
        'product_id' => 3,
        'name' => 'Dinesh Verma',
        'email_id' => 'dinesh@example.com',
        'star' => 5,
        'review' => 'Keeps namkeen fresh and crispy. Great packaging quality.',
        'date' => '2024-03-18',
    ],
];

$discountList = [
    "FLAT10%" => "10",
];

// Data accessor helper functions
function getSampleCategories($status = 'Active', $limit = null)
{
    global $categories;
    $res = [];
    foreach ($categories as $cat) {
        if ($status === null || (isset($cat['status']) && $cat['status'] === $status)) {
            $res[] = $cat;
            if ($limit !== null && count($res) >= $limit) {
                break;
            }
        }
    }
    return $res;
}

function getSampleCategoryById($id)
{
    global $categories;
    foreach ($categories as $cat) {
        if ((int)$cat['id'] === (int)$id) {
            return $cat;
        }
    }
    return null;
}

function getSampleCategoryByUrlAndId($url, $id)
{
    global $categories;
    foreach ($categories as $cat) {
        if ((string)$cat['url'] === (string)$url && (int)$cat['id'] === (int)$id) {
            return $cat;
        }
    }
    // Fallback by ID if URL slug format differs slightly
    return getSampleCategoryById($id);
}

function getSampleProducts($categoryId = null, $status = 'Active', $limit = null, $excludeId = null)
{
    global $products;
    $res = [];
    foreach ($products as $p) {
        if ($status !== null && isset($p['status']) && $p['status'] !== $status) {
            continue;
        }
        if ($categoryId !== null && (int)$p['category_id'] !== (int)$categoryId) {
            continue;
        }
        if ($excludeId !== null && (int)$p['id'] === (int)$excludeId) {
            continue;
        }
        $res[] = $p;
        if ($limit !== null && count($res) >= $limit) {
            break;
        }
    }
    return $res;
}

function getSampleProductById($id)
{
    global $products;
    foreach ($products as $p) {
        if ((int)$p['id'] === (int)$id) {
            return $p;
        }
    }
    return null;
}

function getSampleProductByUrlAndId($url, $id)
{
    global $products;
    foreach ($products as $p) {
        if ((string)$p['url'] === (string)$url && (int)$p['id'] === (int)$id) {
            return $p;
        }
    }
    return getSampleProductById($id);
}

function getSampleProductsByIds($ids)
{
    global $products, $categories;
    if (empty($ids) || !is_array($ids)) {
        return [];
    }
    $catMap = [];
    foreach ($categories as $c) {
        $catMap[$c['id']] = $c['url'];
    }

    $res = [];
    foreach ($products as $p) {
        if (in_array($p['id'], $ids) || in_array((string)$p['id'], $ids)) {
            $item = $p;
            $item['category_url'] = isset($catMap[$p['category_id']]) ? $catMap[$p['category_id']] : 'products';
            $res[] = $item;
        }
    }
    return $res;
}

function getSampleHomeSliders()
{
    global $home_sliders;
    return $home_sliders;
}

function getSampleTestimonials($limit = null)
{
    global $testimonials;
    if ($limit !== null) {
        return array_slice($testimonials, 0, $limit);
    }
    return $testimonials;
}

function getSampleClients($limit = null)
{
    global $clients;
    if ($limit !== null) {
        return array_slice($clients, 0, $limit);
    }
    return $clients;
}

function getSampleFeedbacks($productId = null)
{
    global $feedbacks;
    if ($productId === null) {
        return $feedbacks;
    }
    $res = [];
    foreach ($feedbacks as $f) {
        if ((int)$f['product_id'] === (int)$productId) {
            $res[] = $f;
        }
    }
    return $res;
}
