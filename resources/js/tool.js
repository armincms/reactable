Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'reactable',
      path: '/reactable',
      component: require('./components/Tool'),
    },
  ])
})
