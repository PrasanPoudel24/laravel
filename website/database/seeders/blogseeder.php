<?php

namespace Database\Seeders;

use App\Models\Blog; // Make sure your model name matches (e.g., Blog or Post)
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Architecting Scalable Microservices',
                'img' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97',
                'desc' => 'A deep dive into modern microservices architecture, focusing on event-driven communication and minimizing latency.'
            ],
            [
                'title' => 'Mastering the Art of Minimalist UI Design',
                'img' => 'https://images.unsplash.com/photo-1507238691740-187a5b1d37b8',
                'desc' => 'How to strip away the noise and create user interfaces that are both breathtakingly simple and highly functional.'
            ],
            [
                'title' => 'The Ultimate Guide to Edge Computing',
                'img' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31',
                'desc' => 'Bring your computation closer to the data source. Learn how edge nodes reduce bandwidth issues and speed up apps.'
            ],
            [
                'title' => 'Demystifying CSS Grid and Flexbox Alignment',
                'img' => 'https://images.unsplash.com/photo-1542831371-29b0f74f9713',
                'desc' => 'Stop guessing your layout properties. Learn exactly when to deploy Flexbox versus CSS Grid for complex layouts.'
            ],
            [
                'title' => 'Why TypeScript is Essential for Large Teams',
                'img' => 'https://images.unsplash.com/photo-1618401471353-b98aedd07871',
                'desc' => 'Scale your codebase without losing your mind. See how static typing catches bugs before execution.'
            ],
            [
                'title' => 'An Introduction to Web Accessibility (a11y)',
                'img' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12',
                'desc' => 'Building a web that everyone can use. Learn the basics of ARIA roles, semantic HTML, and keyboard navigation.'
            ],
            [
                'title' => 'Optimizing Database Queries for Speed',
                'img' => 'https://images.unsplash.com/photo-1544383835-bda2bc66a55d',
                'desc' => 'Don\'t let slow queries bottleneck your application. Discover indexing strategies and caching patterns.'
            ],
            [
                'title' => 'The Rise of Serverless Frameworks',
                'img' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa',
                'desc' => 'Forget infrastructure management. Learn how cloud functions scale automatically from zero to millions of requests.'
            ],
            [
                'title' => 'Securing Modern Web Applications',
                'img' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3',
                'desc' => 'A practical checklist for developers to defend against XSS, CSRF, and SQL injection flaws.'
            ],
            [
                'title' => 'How to Build an Effective CI/CD Pipeline',
                'img' => 'https://images.unsplash.com/photo-1607799279861-4dd421887fb3',
                'desc' => 'Automate your testing and deployment. A step-by-step breakdown of merging code safely to production.'
            ],
        ];

        foreach ($blogs as $blog) {
            // Checks if a blog with this exact title already exists
            Blog::updateOrCreate(
                ['title' => $blog['title']], // Unique identifier
                [
                    'img'  => $blog['img'],
                    'desc' => $blog['desc'],
                ]
            );
        }
    }
}