const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/IndexPage.vue') },
      { path: 'recipes', name: 'recipes', component: () => import('pages/RecipePage.vue') },
    ],
  },
]

export default routes
