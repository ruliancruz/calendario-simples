describe('Homepage', () => {
  it('should display a greeting', () => {
    cy.visit('/');

    cy.get('h1').invoke('text').then((text) => {
      expect(text).to.match(/Bom dia!|Boa tarde!|Boa noite!/);
    });
  });
})